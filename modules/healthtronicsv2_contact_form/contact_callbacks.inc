<?php

function contact($form, &$form_state)
{
    $form['#tree'] = TRUE;


    $form['contact'] = array('#type' => 'fieldset');
    
    $form['contact']['subject'] = array(
        '#type' => 'select',
        '#required' => TRUE,
        '#options' => array(
            'request_demo' => t('Subject: Request a software demo.'),
            'request_demo2' => t('Subject: Request a software demo 2.'),
            'request_demo3' => t('Subject: Request a software demo 3.'),
            'request_demo4' => t('Subject: Request a software demo 4.')
            )
        );
        
    $form['contact']['first_name'] = array(
        '#default_value' => t('First Name'),
        '#type' => 'textfield',
        '#size' => 30,
        '#required' => TRUE);

    $form['contact']['last_name'] = array(
        '#default_value' => t('Last Name'),
        '#type' => 'textfield',
        '#size' => 30,
        '#required' => TRUE);

    $form['contact']['email_address'] = array(
        '#default_value' => t('Email Address'),
        '#type' => 'textfield',
        '#required' => TRUE,
        '#size' => 80);
        
    $form['contact']['message'] = array(
        '#default_value' => t('Message (optional)'),
        '#type' => 'textarea',
        '#resizable' => FALSE,
        '#col' => '60',
        '#rows' => '5',
        '#required' => FALSE);


    $form['submit'] = array('#type' => 'submit', '#class' => 'button', '#value' => t('Send'));


    return $form;
}

function contact_vaidate($form, &$form_values){
    
    //var_dump($form['contact']['email_address']);
    var_dump($form['contact']['last_name']);
    if ($form_values['lesson_attributes']['message'] == '') {
    form_set_error('', t('You must describe the article or lesson plan you’d like us to make.'));
  }
}