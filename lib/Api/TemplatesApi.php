<?php

/**
 * TemplatesApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.29
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * TemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplatesApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Add template
     * Add a new template.
     */
    public function add($body = [])
    {
        return $this->config->post('/templates/add', $body);
    }
    /**
     * Delete template
     * Delete a template.
     */
    public function delete($body = [])
    {
        return $this->config->post('/templates/delete', $body);
    }
    /**
     * Get template info
     * Get the information for an existing template.
     */
    public function info($body = [])
    {
        return $this->config->post('/templates/info', $body);
    }
    /**
     * List templates
     * Return a list of all the templates available to this user.
     */
    public function list($body = [])
    {
        return $this->config->post('/templates/list', $body);
    }
    /**
     * Publish template content
     * Publish the content for the template. Any new messages sent using this template will start using the content that was previously in draft.
     */
    public function publish($body = [])
    {
        return $this->config->post('/templates/publish', $body);
    }
    /**
     * Render html template
     * Inject content and optionally merge fields into a template, returning the HTML that results.
     */
    public function render($body = [])
    {
        return $this->config->post('/templates/render', $body);
    }
    /**
     * Get template history
     * Return the recent history (hourly stats for the last 30 days) for a template.
     */
    public function timeSeries($body = [])
    {
        return $this->config->post('/templates/time-series', $body);
    }
    /**
     * Update template
     * Update the code for an existing template. If null is provided for any fields, the values will remain unchanged.
     */
    public function update($body = [])
    {
        return $this->config->post('/templates/update', $body);
    }
}
