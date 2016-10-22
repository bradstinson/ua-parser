Codeigniter-UAParser [DEPRECATED]
================

NOTE: I've not used this code in about 3 years, and will no longer offer any type of support. However, feel free to use this code at your own risk.

Codeigniter-UAParser is a Codeigniter library which makes it easy to utilize the browser-detection library "ua-parser-php". (https://github.com/tobie/ua-parser/tree/master/php)

I cannot take any credit for the original library, I just wrapped it up to make it easier to use within Codeigniter. 

Usage
-----

First you must load the UAParser spark:

	$this->load->spark('uaparser/0.0.1')
	
Once loaded, the following parameters are available to use within your CodeIgniter application:

	echo $this->uaparser->full;
	// -> Chrome 16.0.912/Mac OS X 10.6.8
	
	echo $this->uaparser->browserFull;
	// -> "Chrome 16.0.912"
	
	echo $this->uaparser->browser;
	// -> "Chrome"
	
	echo $this->uaparser->version;
	// -> "16.0.912"
	
	echo $this->uaparser->major;
	// -> 16 (minor, build, & revision also available)
	
	echo $this->uaparser->osFull;
	// -> "Mac OS X 10.6.8"
	
	echo $this->uaparser->os;
	// -> "Mac OS X"
	
	echo $this->uaparser->osVersion;
	// -> "10.6.8"
	
	echo $this->uaparser->osMajor;
	// -> 10 (osMinor, osBuild, & osRevision also available)
	
	/* 
	* in select cases the device information will also be captured
	*/
	
	echo $this->uaparser->deviceFull;
	// -> "Palm Pixi 1.0"
	
	echo $this->uaparser->device;
	// -> "Palm Pixi"
	
	echo $this->uaparser->deviceVersion;
	// -> "1.0"
	
	echo $this->uaparser->deviceMajor;
	// -> 1 (deviceMinor also available)
	
	/*
	* Some other generic boolean options
	*/
	
	echo $this->uaparser->isMobile;
	// -> (would return true if the browser met the criteria of a mobile browser based on the user agent information)
	
	echo $this->uaparser->isMobileDevice;
	// -> (would return true if the device met the criteria of a mobile device based on the user agent information)
	
	echo $this->uaparser->isTablet;
	// -> (would return true if the device was a tablet according to the user agent information)
	
	echo $this->uaparser->isSpider;
	// -> (would return true if the device was a spider according to the user agent information)
	
	echo $this->uaparser->isComputer;
	// -> (would return true if the device was a computer according to the user agent information)
	
	echo $this->uaparser->isUIWebview;
	// -> (would return true if the user agent was from a uiwebview in ios)
	

Updates
-------

The spark is setup to automatically update the included 'regexes.yaml' file once a week. This file is required for the library to work.
