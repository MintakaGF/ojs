<?php

/**
 * @defgroup plugins_paymethod_paypal PayPal Payment Processing Plugin
 */
 
/**
 * @file plugins/paymethod/paypal/index.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_paymethod_paypal
 * @brief Wrapper for PayPal payment plugin.
 */

require_once('PaypalPaymentPlugin.inc.php');

return new PaypalPaymentPlugin();


