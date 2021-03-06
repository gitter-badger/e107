CREATE TABLE banner (
  banner_id int(10) unsigned NOT NULL auto_increment,
  banner_clientname varchar(100) NOT NULL default '',
  banner_clientlogin varchar(20) NOT NULL default '',
  banner_clientpassword varchar(50) NOT NULL default '',
  banner_image varchar(150) NOT NULL default '',
  banner_clickurl varchar(250) NOT NULL default '',
  banner_impurchased int(10) unsigned NOT NULL default '0',
  banner_startdate int(10) unsigned NOT NULL default '0',
  banner_enddate int(10) unsigned NOT NULL default '0',
  banner_active tinyint(3) unsigned NOT NULL default '0',
  banner_clicks int(10) unsigned NOT NULL default '0',
  banner_impressions int(10) unsigned NOT NULL default '0',
  banner_ip text NOT NULL,
  banner_description text NOT NULL,
  banner_campaign varchar(150) NOT NULL default '',
  PRIMARY KEY  (banner_id)
) ENGINE=MyISAM;