<?php
/**
 * AlleventsModelField
 *
 * @version   %%ae3.version%%
 * @package   %%ae3.package%%
 * @copyright %%ae3.copyright%%
 * @license   %%ae3.license%%
 * @author    %%ae3.author%%
 * @access    public
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.application.component.modeladmin');

/**
 * Allevents model.
 *
 * @since  1.6
 */
class AlleventsModelField extends JModelAdmin
{
    /**
     * @var    string    Alias to manage history control
     * @since   3.2
     */
    public $typeAlias = 'com_allevents.field';
    /**
     * @var      string    The prefix to use with controller messages.
     * @since    1.6
     */
    protected $text_prefix = 'COM_ALLEVENTS';
    /**
     * @var null  Item data
     * @since  1.6
     */
    protected $item = null;

    /**
     * Method to get the record form.
     *
     * @param   array $data An optional array of data for the form to interogate.
     * @param   boolean $loadData True if the form is to load its own data (default case), false if not.
     *
     * @return bool|JForm
     *
     * @since    1.6
     */
    public function getForm($data = [], $loadData = true)
    {
        // Get the form.
        $form = $this->loadForm(
            'com_allevents.field', 'field',
            ['control' => 'jform',
                'load_data' => $loadData
            ]
        );

        if (empty($form)) {
            return false;
        }

        return $form;
    }

    /**
     * Method to duplicate an Field
     *
     * @param   array &$pks An array of primary key IDs.
     *
     * @return  boolean  True if successful.
     *
     * @throws  Exception
     */
    public function duplicate(&$pks)
    {
        $user = JFactory::getUser();

        // Access checks.
        if (!$user->authorise('core.create', 'com_allevents')) {
            throw new Exception(JText::_('JERROR_CORE_CREATE_NOT_PERMITTED'));
        }

        $dispatcher = JEventDispatcher::getInstance();
        $context = $this->option . '.' . $this->name;

        // Include the plugins for the save events.
        JPluginHelper::importPlugin($this->events_map['save']);

        try {
            $table = $this->getTable();

            foreach ($pks as $pk) {
                $table->load($pk, true);
                // Reset the id to create a new record.
                $table->id = 0;

                $table->check();

                // Trigger the before save event.
                $dispatcher->trigger($this->event_before_save, [$context, &$table, true]);

                $table->store();

                // Trigger the after save event.
                $dispatcher->trigger($this->event_after_save, [$context, &$table, true]);
            }
        } catch (Exception $e) {
            JFactory::getApplication()->enqueueMessage($e->getMessage(), 'error');

            return false;
        }
        // Clean cache
        $this->cleanCache();

        return true;
    }

    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param   string $type The table type to instantiate
     * @param   string $prefix A prefix for the table class name. Optional.
     * @param   array $config Configuration array for model. Optional.
     *
     * @return    JTable    A database object
     *
     * @since    1.6
     */
    public
    function getTable($type = 'Field', $prefix = 'AlleventsTable', $config = [])
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return   mixed  The data for the form.
     *
     * @throws Exception
     * @since    1.6
     */
    protected
    function loadFormData()
    {
        // Check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_allevents.edit.field.data', []);

        if (empty($data)) {
            if ($this->item === null) {
                $this->item = $this->getItem();
            }

            $data = $this->item;
        }

        return $data;
    }

    /**
     * Method to get a single record.
     *
     * @param   integer $pk The id of the primary key.
     *
     * @return  mixed    Object on success, false on failure.
     *
     * @since    1.6
     */
    public
    function getItem($pk = null)
    {
        if ($item = parent::getItem($pk)) {
            // Do any procesing on fields here if needed
        }

        return $item;
    }

    /**
     * Prepare and sanitise the table prior to saving.
     *
     * @param   JTable $table Table Object
     *
     * @return void
     *
     * @since    1.6
     */
    protected
    function prepareTable($table)
    {
        jimport('joomla.filter.output');

        if (empty($table->id)) {
            // Set ordering to the last item if not set
            if (@$table->ordering === '') {
                $db = JFactory::getDbo();
                $db->setQuery('SELECT MAX(ordering) FROM #__allevents_formfield');
                $max = $db->loadResult();
                $table->ordering = $max + 1;
            }
        }
    }
}
