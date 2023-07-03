<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiOtpValidationNeedException extends VKApiException
{
	/**
	 * VKApiOtpValidationNeedException constructor.
	 * @param VkApiError $error
	 */
	public function __construct(VKApiError $error)
	{
		parent::__construct(3303, 'Otp app validation needed', $error);
	}
}

