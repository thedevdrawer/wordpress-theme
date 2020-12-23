<?php
    $employees = tr_post_type('employees', 'Employees');
    $employees->setIcon('users');
    $employees->setSlug('employees');
    $employees->setTitlePlaceholder('Enter employee name here');
    $employees->setArgument('supports', ['title','editor','thumbnail', 'revisions']);

    /* meta boxes */
    $employeesMeta = tr_meta_box('Employee Information');
    $employeesMeta->addScreen('employees');
    $employeesMeta->setPriority('high');
    $employeesMeta->setCallback(
        function() {
            $form = tr_form();
            echo $form->row($form->text('Position'), $form->date('HireDate')->setLabel('Hire Date'));
            echo $form->editor('Editor');
            echo $form->wpEditor('WP Editor');
            echo $form->radio('Radio Select')->setOptions(
                array(
                    'Option 1'=>1,
                    'Option 2'=>2
                )
            );
            echo $form->select('Select Box')->setOptions(
                array(
                    'Option 1'=>1,
                    'Option 2'=>2
                )
            );
            echo $form->file('File');
            echo $form->gallery('Gallery');
        }
    );

    /* repeating */
    $employeesRepeating = tr_meta_box('Repeating');
    $employeesRepeating->addScreen('employees');
    $employeesRepeating->setPriority('high');
    $employeesRepeating->setCallback(
        function() {
            $form = tr_form();
            $repeating = $form->repeater('Repeating Fields')->setFields(array(
                $form->text('Text'),
                $form->editor('Editor')
            ));
            echo $repeating;
        }
    );

    /* shortcodes */
    function devdrawer_employeesrandom($attr, $content = NULL) {
        $query = new WP_Query(
            array(
                'post_type'      => 'employees',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => 'rand'
            )
        );
        $str = '';
        while ( $query->have_posts()):
            $query->the_post();
            $str .= '<p>'.get_the_title().'</p>';
        endwhile;
        return $str;
    }

    add_shortcode('employeesrandom', 'devdrawer_employeesrandom');

    add_filter('manage_employees_posts_columns', 'devdrawer_employees_columns');

    function devdrawer_employees_columns($columns){
        $columns = array(
            'cb'=>'cb',
            'title'=>'Name',
            'position'=>'Position',
            'hiredate'=>'Hire Date',
            'date'=>'Date'
        );
        unset($columns['author']);
        unset($columns['comments']);
        return $columns;
    }

    add_action('manage_employees_posts_custom_column', 'devdrawer_employees_show_columns');

    function devdrawer_employees_show_columns($column_name){
        global $post;
        if($column_name == 'position') :
            echo tr_posts_field('position');
        endif;

        if($column_name == 'hiredate') :
            echo tr_posts_field('hiredate');
        endif;
    }