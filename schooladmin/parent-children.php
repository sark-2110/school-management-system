<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	/* Configuration */
	/*************************************/

		$pcConfig = array(
			'students' => array(   
			),
			'feescollection' => array(   
				'Student' => array(   
					'parent-table' => 'students',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Fees Payment',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/account_balances.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Student', 2 => 'Class', 3 => 'Session', 4 => 'PaidAmount (Ksh)', 5 => 'Balance (Ksh)', 6 => 'Branch', 7 => 'Date', 8 => 'Remarks'),
					'display-field-names' => array(1 => 'Student', 2 => 'Class', 3 => 'Session', 4 => 'PaidAmount', 5 => 'Balance', 6 => 'Branch', 7 => 'Date', 8 => 'Remarks'),
					'sortable-fields' => array(0 => '`feescollection`.`id`', 1 => '`feescollection`.`Student`', 2 => '`feescollection`.`Class`', 3 => '`feescollection`.`Session`', 4 => '`feescollection`.`PaidAmount`', 5 => '`feescollection`.`Balance`', 6 => '`feescollection`.`Branch`', 7 => '`feescollection`.`Date`', 8 => '`feescollection`.`Remarks`'),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-feescollection',
					'template-printable' => 'children-feescollection-printable',
					'query' => "SELECT `feescollection`.`id` as 'id', IF(    CHAR_LENGTH(`students1`.`FullName`) || CHAR_LENGTH(`students1`.`RegNo`), CONCAT_WS('',   `students1`.`FullName`, ' :RegNo: ', `students1`.`RegNo`), '') as 'Student', IF(    CHAR_LENGTH(`classes1`.`Name`) || CHAR_LENGTH(`Hobbiess1`.`Name`), CONCAT_WS('',   `classes1`.`Name`, ' :Hobbies ', `Hobbiess1`.`Name`), '') as 'Class', IF(    CHAR_LENGTH(`sessions1`.`Year`) || CHAR_LENGTH(`sessions1`.`Term`), CONCAT_WS('',   `sessions1`.`Year`, ' :Term ', `sessions1`.`Term`), '') as 'Session', `feescollection`.`PaidAmount` as 'PaidAmount', IF(    CHAR_LENGTH(`students1`.`Balance`), CONCAT_WS('',   `students1`.`Balance`), '') as 'Balance', IF(    CHAR_LENGTH(`branch1`.`Name`) || CHAR_LENGTH(`branch1`.`AccountNumber`), CONCAT_WS('',   `branch1`.`Name`, ' :Acc.No:  ', `branch1`.`AccountNumber`), '') as 'Branch', if(`feescollection`.`Date`,date_format(`feescollection`.`Date`,'%m/%d/%Y'),'') as 'Date', `feescollection`.`Remarks` as 'Remarks' FROM `feescollection` LEFT JOIN `students` as students1 ON `students1`.`id`=`feescollection`.`Student` LEFT JOIN `sessions` as sessions1 ON `sessions1`.`id`=`feescollection`.`Session` LEFT JOIN `branch` as branch1 ON `branch1`.`id`=`feescollection`.`Branch` LEFT JOIN `classes` as classes1 ON `classes1`.`id`=`students1`.`Class` LEFT JOIN `Hobbiess` as Hobbiess1 ON `Hobbiess1`.`id`=`students1`.`Hobbies` "
				)
			),
			'branch' => array(   
			),
			'teachers' => array(   
			),
			'subjects' => array(   
			),
			'classes' => array(   
			),
			'Hobbiess' => array(   
			),
			'hostels' => array(   
			),
			'timetable' => array(   
				'Class' => array(   
					'parent-table' => 'classes',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'TimeTable',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/data_chooser.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Time Table', 2 => 'Class', 3 => 'Hobbies'),
					'display-field-names' => array(1 => 'Time_Table', 2 => 'Class', 3 => 'Hobbies'),
					'sortable-fields' => array(0 => '`timetable`.`id`', 1 => '`timetable`.`Time_Table`', 2 => '`timetable`.`Class`', 3 => '`timetable`.`Hobbies`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-timetable',
					'template-printable' => 'children-timetable-printable',
					'query' => "SELECT `timetable`.`id` as 'id', `timetable`.`Time_Table` as 'Time_Table', IF(    CHAR_LENGTH(`classes1`.`Name`), CONCAT_WS('',   `classes1`.`Name`), '') as 'Class', IF(    CHAR_LENGTH(`Hobbiess1`.`Name`), CONCAT_WS('',   `Hobbiess1`.`Name`), '') as 'Hobbies' FROM `timetable` LEFT JOIN `classes` as classes1 ON `classes1`.`id`=`timetable`.`Class` LEFT JOIN `Hobbiess` as Hobbiess1 ON `Hobbiess1`.`id`=`timetable`.`Hobbies` "
				)
			),
			'events' => array(   
			),
			'notices' => array(   
			),
			'examresults' => array(   
				'student' => array(   
					'parent-table' => 'students',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Exam Results',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/application_view_columns.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Student', 2 => 'RegNo', 3 => 'Class', 4 => 'Hobbies', 5 => 'Category', 6 => 'Subject', 7 => 'Marks', 8 => 'Term', 9 => 'AcademicYear'),
					'display-field-names' => array(1 => 'student', 2 => 'RegNo', 3 => 'Class', 4 => 'Hobbies', 5 => 'Category', 6 => 'Subject', 7 => 'Marks', 8 => 'Term', 9 => 'AcademicYear'),
					'sortable-fields' => array(0 => '`examresults`.`id`', 1 => '`examresults`.`student`', 2 => '`examresults`.`RegNo`', 3 => '`examresults`.`Class`', 4 => '`examresults`.`Ho`', 5 => '`examresults`.`Category`', 6 => '`examresults`.`Subject`', 7 => '`examresults`.`Marks`', 8 => '`examresults`.`Term`', 9 => '`examresults`.`AcademicYear`'),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-examresults',
					'template-printable' => 'children-examresults-printable',
					'query' => "SELECT `examresults`.`id` as 'id', IF(    CHAR_LENGTH(`students1`.`FullName`), CONCAT_WS('',   `students1`.`FullName`), '') as 'student', IF(    CHAR_LENGTH(`students1`.`RegNo`), CONCAT_WS('',   `students1`.`RegNo`), '') as 'RegNo', IF(    CHAR_LENGTH(`classes1`.`Name`), CONCAT_WS('',   `classes1`.`Name`), '') as 'Class', IF(    CHAR_LENGTH(`hobbies1`.`Name`), CONCAT_WS('',   `hobbies1`.`Name`), '') as 'Hobbies', IF(    CHAR_LENGTH(`examcategories1`.`Name`), CONCAT_WS('',   `examcategories1`.`Name`), '') as 'Category', IF(    CHAR_LENGTH(`subjects1`.`Name`), CONCAT_WS('',   `subjects1`.`Name`), '') as 'Subject', `examresults`.`Marks` as 'Marks', IF(    CHAR_LENGTH(`sessions1`.`Year`), CONCAT_WS('',   `sessions1`.`Year`), '') as 'Term', IF(    CHAR_LENGTH(`sessions2`.`Year`) || CHAR_LENGTH(`sessions2`.`Term`), CONCAT_WS('',   `sessions2`.`Year`, ' :Term ', `sessions2`.`Term`), '') as 'AcademicYear' FROM `examresults` LEFT JOIN `students` as students1 ON `students1`.`id`=`examresults`.`student` LEFT JOIN `examcategories` as examcategories1 ON `examcategories1`.`id`=`examresults`.`Category` LEFT JOIN `subjects` as subjects1 ON `subjects1`.`id`=`examresults`.`Subject` LEFT JOIN `sessions` as sessions1 ON `sessions1`.`id`=`examresults`.`Term` LEFT JOIN `classes` as classes1 ON `classes1`.`id`=`students1`.`Class` LEFT JOIN `hobbies` as hobbies1 ON `hobbies1`.`id`=`students1`.`Hobbies` LEFT JOIN `sessions` as sessions2 ON `sessions2`.`id`=`students1`.`AcademicYear` "
				),
				'Subject' => array(   
					'parent-table' => 'subjects',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Exam Results',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/application_view_columns.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Student', 2 => 'RegNo', 3 => 'Class', 4 => 'Hobbies', 5 => 'Category', 6 => 'Subject', 7 => 'Marks', 8 => 'Term', 9 => 'AcademicYear'),
					'display-field-names' => array(1 => 'student', 2 => 'RegNo', 3 => 'Class', 4 => 'Hobbies', 5 => 'Category', 6 => 'Subject', 7 => 'Marks', 8 => 'Term', 9 => 'AcademicYear'),
					'sortable-fields' => array(0 => '`examresults`.`id`', 1 => '`examresults`.`student`', 2 => '`examresults`.`RegNo`', 3 => '`examresults`.`Class`', 4 => '`examresults`.`Hobbies`', 5 => '`examresults`.`Category`', 6 => '`examresults`.`Subject`', 7 => '`examresults`.`Marks`', 8 => '`examresults`.`Term`', 9 => '`examresults`.`AcademicYear`'),
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-examresults',
					'template-printable' => 'children-examresults-printable',
					'query' => "SELECT `examresults`.`id` as 'id', IF(    CHAR_LENGTH(`students1`.`FullName`), CONCAT_WS('',   `students1`.`FullName`), '') as 'student', IF(    CHAR_LENGTH(`students1`.`RegNo`), CONCAT_WS('',   `students1`.`RegNo`), '') as 'RegNo', IF(    CHAR_LENGTH(`classes1`.`Name`), CONCAT_WS('',   `classes1`.`Name`), '') as 'Class', IF(    CHAR_LENGTH(`hobbies1`.`Name`), CONCAT_WS('',   `hobbies1`.`Name`), '') as 'Hobbies', IF(    CHAR_LENGTH(`examcategories1`.`Name`), CONCAT_WS('',   `examcategories1`.`Name`), '') as 'Category', IF(    CHAR_LENGTH(`subjects1`.`Name`), CONCAT_WS('',   `subjects1`.`Name`), '') as 'Subject', `examresults`.`Marks` as 'Marks', IF(    CHAR_LENGTH(`sessions1`.`Year`), CONCAT_WS('',   `sessions1`.`Year`), '') as 'Term', IF(    CHAR_LENGTH(`sessions2`.`Year`) || CHAR_LENGTH(`sessions2`.`Term`), CONCAT_WS('',   `sessions2`.`Year`, ' :Term ', `sessions2`.`Term`), '') as 'AcademicYear' FROM `examresults` LEFT JOIN `students` as students1 ON `students1`.`id`=`examresults`.`student` LEFT JOIN `examcategories` as examcategories1 ON `examcategories1`.`id`=`examresults`.`Category` LEFT JOIN `subjects` as subjects1 ON `subjects1`.`id`=`examresults`.`Subject` LEFT JOIN `sessions` as sessions1 ON `sessions1`.`id`=`examresults`.`Term` LEFT JOIN `classes` as classes1 ON `classes1`.`id`=`students1`.`Class` LEFT JOIN `hobbies` as hobbies1 ON `hobbies1`.`id`=`students1`.`Hobbies` LEFT JOIN `sessions` as sessions2 ON `sessions2`.`id`=`students1`.`AcademicYear` "
				)
			),
			'parents' => array(   
			),
			'examcategories' => array(   
			),
			'sessions' => array(   
			),
			'studentcategories' => array(   
			),
			'classattendance' => array(   
				'Subject' => array(   
					'parent-table' => 'subjects',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'AttendanceManagement',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/chart_down_color.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Subject', 2 => 'Student', 3 => 'RegNo', 4 => 'Class', 5 => 'Hobbies', 6 => 'Attended', 7 => 'Date'),
					'display-field-names' => array(1 => 'Subject', 2 => 'Student', 3 => 'RegNo', 4 => 'Class', 5 => 'Hobbies', 6 => 'Attended', 7 => 'Date'),
					'sortable-fields' => array(0 => '`classattendance`.`id`', 1 => '`classattendance`.`Subject`', 2 => '`classattendance`.`Student`', 3 => '`classattendance`.`RegNo`', 4 => '`classattendance`.`Class`', 5 => '`classattendance`.`Hobbies`', 6 => '`classattendance`.`Attended`', 7 => '`classattendance`.`Date`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-classattendance',
					'template-printable' => 'children-classattendance-printable',
					'query' => "SELECT `classattendance`.`id` as 'id', IF(    CHAR_LENGTH(`subjects1`.`Name`), CONCAT_WS('',   `subjects1`.`Name`), '') as 'Subject', IF(    CHAR_LENGTH(`students1`.`FullName`), CONCAT_WS('',   `students1`.`FullName`), '') as 'Student', IF(    CHAR_LENGTH(`students1`.`RegNo`), CONCAT_WS('',   `students1`.`RegNo`), '') as 'RegNo', IF(    CHAR_LENGTH(`classes1`.`Name`), CONCAT_WS('',   `classes1`.`Name`), '') as 'Class', IF(    CHAR_LENGTH(`Hobbiess1`.`Name`), CONCAT_WS('',   `hobbies1`.`Name`), '') as 'Hobbies', concat('<img src=\"', if(`classattendance`.`Attended`, 'checked.gif', 'checkednot.gif'), '\" border=\"0\" />') as 'Attended', if(`classattendance`.`Date`,date_format(`classattendance`.`Date`,'%m/%d/%Y'),'') as 'Date' FROM `classattendance` LEFT JOIN `subjects` as subjects1 ON `subjects1`.`id`=`classattendance`.`Subject` LEFT JOIN `students` as students1 ON `students1`.`id`=`classattendance`.`Student` LEFT JOIN `classes` as classes1 ON `classes1`.`id`=`students1`.`Class` LEFT JOIN `Hobbies` as hobbies1 ON `hobbies1`.`id`=`students1`.`Hobbies` "
				),
				'Student' => array(   
					'parent-table' => 'students',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Class Attendance',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/chart_down_color.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Subject', 2 => 'Student', 3 => 'RegNo', 4 => 'Class', 5 => 'Hobbies', 6 => 'Attended', 7 => 'Date'),
					'display-field-names' => array(1 => 'Subject', 2 => 'Student', 3 => 'RegNo', 4 => 'Class', 5 => 'Hobbies', 6 => 'Attended', 7 => 'Date'),
					'sortable-fields' => array(0 => '`classattendance`.`id`', 1 => '`classattendance`.`Subject`', 2 => '`classattendance`.`Student`', 3 => '`classattendance`.`RegNo`', 4 => '`classattendance`.`Class`', 5 => '`classattendance`.`Hobbies`', 6 => '`classattendance`.`Attended`', 7 => '`classattendance`.`Date`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-classattendance',
					'template-printable' => 'children-classattendance-printable',
					'query' => "SELECT `classattendance`.`id` as 'id', IF(    CHAR_LENGTH(`subjects1`.`Name`), CONCAT_WS('',   `subjects1`.`Name`), '') as 'Subject', IF(    CHAR_LENGTH(`students1`.`FullName`), CONCAT_WS('',   `students1`.`FullName`), '') as 'Student', IF(    CHAR_LENGTH(`students1`.`RegNo`), CONCAT_WS('',   `students1`.`RegNo`), '') as 'RegNo', IF(    CHAR_LENGTH(`classes1`.`Name`), CONCAT_WS('',   `classes1`.`Name`), '') as 'Class', IF(    CHAR_LENGTH(`hobbies1`.`Name`), CONCAT_WS('',   `hobbies1`.`Name`), '') as 'Hobbies', concat('<img src=\"', if(`classattendance`.`Attended`, 'checked.gif', 'checkednot.gif'), '\" border=\"0\" />') as 'Attended', if(`classattendance`.`Date`,date_format(`classattendance`.`Date`,'%m/%d/%Y'),'') as 'Date' FROM `classattendance` LEFT JOIN `subjects` as subjects1 ON `subjects1`.`id`=`classattendance`.`Subject` LEFT JOIN `students` as students1 ON `students1`.`id`=`classattendance`.`Student` LEFT JOIN `classes` as classes1 ON `classes1`.`id`=`students1`.`Class` LEFT JOIN `Hobbies` as hobbies1 ON `hobbies1`.`id`=`students1`.`Hobbies` "
				)
			),
			'schoolmoney' => array(   
			)
		);

	/*************************************/
	/* End of configuration */


	$currDir = dirname(__FILE__);
	include("{$currDir}/defaultLang.php");
	include("{$currDir}/language.php");
	include("{$currDir}/lib.php");
	@header('Content-Type: text/html; charset=' . datalist_db_encoding);

	handle_maintenance();

	/**
	* dynamic configuration based on current user's permissions
	* $userPCConfig array is populated only with parent tables where the user has access to
	* at least one child table
	*/
	$userPCConfig = array();
	foreach($pcConfig as $pcChildTable => $ChildrenLookups){
		$permChild = getTablePermissions($pcChildTable);
		if($permChild[2]){ // user can view records of the child table, so proceed to check children lookups
			foreach($ChildrenLookups as $ChildLookupField => $ChildConfig){
				$permParent = getTablePermissions($ChildConfig['parent-table']);
				if($permParent[2]){ // user can view records of parent table
					$userPCConfig[$pcChildTable][$ChildLookupField] = $pcConfig[$pcChildTable][$ChildLookupField];
					// show add new only if configured above AND the user has insert permission
					if($permChild[1] && $pcConfig[$pcChildTable][$ChildLookupField]['display-add-new']){
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = true;
					}else{
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = false;
					}
				}
			}
		}
	}

	/* Receive, UTF-convert, and validate parameters */
	$ParentTable = $_REQUEST['ParentTable']; // needed only with operation=show-children, will be validated in the processing code
	$ChildTable = $_REQUEST['ChildTable'];
		if(!in_array($ChildTable, array_keys($userPCConfig))){
			/* defaults to first child table in config array if not provided */
			$ChildTable = current(array_keys($userPCConfig));
		}
		if(!$ChildTable){ die('<!-- No tables accessible to current user -->'); }
	$SelectedID = strip_tags($_REQUEST['SelectedID']);
	$ChildLookupField = $_REQUEST['ChildLookupField'];
		if(!in_array($ChildLookupField, array_keys($userPCConfig[$ChildTable]))){
			/* defaults to first lookup in current child config array if not provided */
			$ChildLookupField = current(array_keys($userPCConfig[$ChildTable]));
		}
	$Page = intval($_REQUEST['Page']);
		if($Page < 1){
			$Page = 1;
		}
	$SortBy = ($_REQUEST['SortBy'] != '' ? abs(intval($_REQUEST['SortBy'])) : false);
		if(!in_array($SortBy, array_keys($userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields']), true)){
			$SortBy = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-by'];
		}
	$SortDirection = strtolower($_REQUEST['SortDirection']);
		if(!in_array($SortDirection, array('asc', 'desc'))){
			$SortDirection = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-direction'];
		}
	$Operation = strtolower($_REQUEST['Operation']);
		if(!in_array($Operation, array('get-records', 'show-children', 'get-records-printable', 'show-children-printable'))){
			$Operation = 'get-records';
		}

	/* process requested operation */
	switch($Operation){
		/************************************************/
		case 'show-children':
			/* populate HTML and JS content with children tabs */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<li%s><a href="#panel_%s-%s" id="tab_%s-%s" data-toggle="tab">%s%s</a></li>' . "\n\t\t\t\t\t",($tabLabels ? '' : ' class="active"'), $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="tab-pane%s"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, ($tabPanels ? '' : ' active'), $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs">
				<ul class="nav nav-tabs">
					<?php echo $tabLabels; ?>
				</ul>
				<span id="pc-loading"></span>
			</div>
			<div class="tab-content"><?php echo $tabPanels; ?></div>

			<script>
				$j(function(){
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded){
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'show-children-printable':
			/* populate HTML and JS content with children buttons */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<button type="button" class="btn btn-default" data-target="#panel_%s-%s" id="tab_%s-%s" data-toggle="collapse">%s %s</button>' . "\n\t\t\t\t\t", $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="collapse"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records-printable" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs" class="hidden-print">
				<div class="btn-group btn-group-lg">
					<?php echo $tabLabels; ?>
				</div>
				<span id="pc-loading"></span>
			</div>
			<div class="vspacer-lg"><?php echo $tabPanels; ?></div>

			<script>
				$j(function(){
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded){
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'get-records-printable':
		default: /* default is 'get-records' */

			if($Operation == 'get-records-printable'){
				$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] = 2000;
			}

			// build the user permissions limiter
			$permissionsWhere = $permissionsJoin = '';
			if($permChild[2] == 1){ // user can view only his own records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND LCASE(`membership_userrecords`.`memberID`)='".getLoggedMemberID()."'";
			}elseif($permChild[2] == 2){ // user can view only his group's records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND `membership_userrecords`.`groupID`='".getLoggedGroupID()."'";
			}elseif($permChild[2] == 3){ // user can view all records
				/* that's the only case remaining ... no need to modify the query in this case */
			}
			$permissionsJoin = ($permissionsWhere ? ", `membership_userrecords`" : '');

			// build the count query
			$forcedWhere = $userPCConfig[$ChildTable][$ChildLookupField]['forced-where'];
			$query = 
				preg_replace('/^select .* from /i', 'SELECT count(1) FROM ', $userPCConfig[$ChildTable][$ChildLookupField]['query']) .
				$permissionsJoin . " WHERE " .
				($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
				($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
				"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'";
			$totalMatches = sqlValue($query);

			// make sure $Page is <= max pages
			$maxPage = ceil($totalMatches / $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']);
			if($Page > $maxPage){ $Page = $maxPage; }

			// initiate output data array
			$data = array(
				'config' => $userPCConfig[$ChildTable][$ChildLookupField],
				'parameters' => array(
					'ChildTable' => $ChildTable,
					'ChildLookupField' => $ChildLookupField,
					'SelectedID' => $SelectedID,
					'Page' => $Page,
					'SortBy' => $SortBy,
					'SortDirection' => $SortDirection,
					'Operation' => $Operation
				),
				'records' => array(),
				'totalMatches' => $totalMatches
			);

			// build the data query
			if($totalMatches){ // if we have at least one record, proceed with fetching data
				$startRecord = $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] * ($Page - 1);
				$data['query'] = 
					$userPCConfig[$ChildTable][$ChildLookupField]['query'] .
					$permissionsJoin . " WHERE " .
					($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
					($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
					"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'" . 
					($SortBy !== false && $userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy] ? " ORDER BY {$userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy]} $SortDirection" : '') .
					" LIMIT $startRecord, {$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']}";
				$res = sql($data['query'], $eo);
				while($row = db_fetch_row($res)){
					$data['records'][$row[$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key-index']]] = $row;
				}
			}else{ // if no matching records
				$startRecord = 0;
			}

			if($Operation == 'get-records-printable'){
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template-printable'], $data);
			}else{
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template'], $data);
			}

			// change name space to ensure uniqueness
			$uniqueNameSpace = $ChildTable.ucfirst($ChildLookupField).'GetRecords';
			echo str_replace("{$ChildTable}GetChildrenRecordsList", $uniqueNameSpace, $response);
		/************************************************/
	}
