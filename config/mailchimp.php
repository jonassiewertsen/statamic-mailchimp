<?php

return [

    /*
     * If you want to add to your mailchimp audience when a user registers, set this to `true`
     */
    'add_new_users' => false,

    /*
     * The form submissions to add to your Mailchimp Audiences
     */
    'forms' => [
        [
            /*
            * A MailChimp audience id. Check the MailChimp docs if you don't know
            * how to get this value:
            * https://mailchimp.com/help/find-audience-id/.
            */
            'audience_id' => '',

            /*
            * if you need consent before you can subscribe someone, set this to `true`
            */
            'check_consent' => true,

            /*
            * if you're checking for consent, which field is it? Defaults to `'consent'`
            */
            'consent_field' => 'consent',

            /*
            * handle of the form to listen for
            */
            'form' => '',

            /*
            * See https://mailchimp.com/help/manage-audience-signup-form-fields/ for details on
            * Mailchimp merge fields
            */
            'merge_fields' => [
                [
                    /*
                    * The Mailchimp tag
                    */
                    'tag'=> '',

                    /*
                    * the blueprint field name to use for the merge field
                    */
                    'field_name' => '',
                ],
            ],

            /*
            * To have single opt in only, which I don't recommend, set this to `true`.
            * See: https://mailchimp.com/help/single-opt-in-vs-double-opt-in/ for details
            */
            'disable_opt_in' => false,
        ],
    ],
];
