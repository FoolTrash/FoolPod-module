<?php

namespace Foolpod\Model;

class Container extends \Module_Base
{
	/**
	 * The time of container: plugin, theme, module
	 * 
	 * @var null|string 
	 */
	public $type = null;
	
	/**
	 * Pretty name of the container
	 * 
	 * @var null|string 
	 */
	public $name = null;
	
	/**
	 * Directory-friendly name
	 * 
	 * @var null|string 
	 */
	public $slug = null;
	
	/**
	 * Identifier to the module [fu => foolfuuka, ff => foolframe, fp => foolpod]
	 * 
	 * @var null|string 
	 */
	public $identifier = null;
	
	/**
	 * Version in <major>.<minor>.<patch> or <major>.<minor>.<patch>-dev-<dev>
	 *
	 * @var null|string 
	 */
	public $version = null;
	
	/**
	 * Version's <major>
	 *
	 * @var null|int 
	 */
	public $major = null;
	
	/**
	 * Version's <minor>
	 *
	 * @var null|int 
	 */
	public $minor = null;
	
	/**
	 * Version's <patch>
	 *
	 * @var null|int 
	 */
	public $patch = null;
	
	/**
	 * Version's <dev>
	 *
	 * @var null|int 
	 */
	public $major = null;
	
	/**
	 * Number to determine the database schema and other migrations
	 * 
	 * @var null|int
	 */
	public $revision = null;
	
	/**
	 * Human readable description
	 * 
	 * @var null|string 
	 */
	public $description = null;
	
	/**
	 * Author name
	 *
	 * @var null|string
	 */
	public $author = null;
	
	/**
	 * Author link
	 * 
	 * @var null|string 
	 */
	public $author_link = null;
	
	/**
	 * Support link
	 * 
	 * @var null|string 
	 */
	public $support_link = null;
	
	/**
	 * License
	 * 
	 * @var null|string 
	 */
	public $license = null;
	
	/**
	 * License link
	 * 
	 * @var type 
	 */
	public $license_link = null;
	
	
	/**
	 * Picks up the data from an upload, stores the file and puts the JSON data in database
	 * 
	 * @param type $data
	 */
	public static function forgeFromUpload($data)
	{
		\Upload::process(array(
			'path' => APPPATH.'tmp/pod_container_upload/',
			'max_size' => \Auth::has_access('media.upload_limitless') ? 9999 * 1024 * 1024 : 5000 * 1024,
			'randomize' => true,
			'max_length' => 64,
			'ext_whitelist' => array('zip'),
			'mime_whitelist' => array('application/zip', 'application/x-zip', 'application/x-zip-compressed')
		));
		
		
		$zip = new \ZipArchive;
		
		$res = $zip->open('file.zip');
		
		if ($res === TRUE) {
		  $zip->extractTo('/myzips/extract_path/');
		  $zip->close();
		  echo 'woot!';
		} else {
		  echo 'doh!';
		}
	}
	
	
}