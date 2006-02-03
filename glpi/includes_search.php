<?php
/*
 * @version $Id$
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2006 by the INDEPNET Development Team.
 
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/

// ----------------------------------------------------------------------
// Original Author of file: Julien Dombre
// Purpose of file:
// ----------------------------------------------------------------------
 

$SEARCH_OPTION=array(
COMPUTER_TYPE => array(	1 => array(	"table" => "glpi_computers", 
				 	"field" => "name",
					"linkfield"=>"name",
					"name" => $lang["computers"][7],
					"meta" => 1,
				),
			2 => array(	"table" => "glpi_computers", 
					"field" => "ID",
					"linkfield"=>"ID",
					"name" => $lang["computers"][31],
					"meta" => 1,
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"linkfield"=>"location",
					"name" => $lang["computers"][10],
					"meta" => 0,
				),
			4 => array(	"table" => "glpi_type_computers", 
					"field" => "name",
					"linkfield"=>"type",
					"name" => $lang["computers"][8],
					"meta" => 1,
				),
			5 => array(	"table" => "glpi_dropdown_model", 
					"field" => "name",
					"linkfield"=>"model",
					"name" => $lang["computers"][50],
					"meta" => 1,
				),
			6 => array(	"table" => "glpi_dropdown_os", 
					"field" => "name",
					"linkfield"=>"os",
					"name" => $lang["computers"][9],
					"meta" => 0,
				),
			7 => array(	"table" => "glpi_device_processor", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][21],
					"meta" => 1,
				),
			36 => array(	"table" => "glpi_device_processor", 
					"field" => "specif_default",
					"linkfield"=>"",
					"name" => $lang["computers"][21]." ".$lang["setup"][35],
					"meta" => 1,
				),
			8 => array(	"table" => "glpi_computers", 
					"field" => "serial",
					"linkfield"=>"serial",
					"name" => $lang["computers"][17],
					"meta" => 1,
				),
			9 => array(	"table" => "glpi_computers", 
					"field" => "otherserial",
					"linkfield"=>"otherserial",
					"name" => $lang["computers"][18],
					"meta" => 1,
				),
			10 => array(	"table" => "glpi_device_ram", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][23],
					"meta" => 1,
				),
			35 => array(	"table" => "glpi_device_ram", 
					"field" => "specif_default",
					"linkfield"=>"",
					"name" => $lang["computers"][24],
					"meta" => 1,
				),
			11 => array(	"table" => "glpi_device_iface", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][26],
					"meta" => 1,
				),
			12 => array(	"table" => "glpi_device_sndcard", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][33],
					"meta" => 1,
				),
			13 => array(	"table" => "glpi_device_gfxcard", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][34],
					"meta" => 1,
				),
			14 => array(	"table" => "glpi_device_moboard", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][35],
					"meta" => 1,
				),
			15 => array(	"table" => "glpi_device_hdd", 
					"field" => "designation",
					"linkfield"=>"",
					"name" => $lang["computers"][36],
					"meta" => 1,
				),
			34 => array(	"table" => "glpi_device_hdd", 
					"field" => "specif_default",
					"linkfield"=>"",
					"name" => $lang["computers"][25],
					"meta" => 1,
				),
			16 => array(	"table" => "glpi_computers", 
					"field" => "comments",
					"linkfield"=>"",
					"name" => $lang["computers"][19],
					"meta" => 1,
				),
			17 => array(	"table" => "glpi_computers", 
					"field" => "contact",
					"linkfield"=>"contact",
					"name" => $lang["computers"][16],
					"meta" => 1,
				),
			18 => array(	"table" => "glpi_computers", 
					"field" => "contact_num",
					"linkfield"=>"contact_num",
					"name" => $lang["computers"][15],
					"meta" => 1,
					
				),
			19 => array(	"table" => "glpi_computers", 
					"field" => "date_mod",
					"linkfield"=>"",
					"name" => $lang["computers"][11],
					"meta" => 1,
				),
			32 => array(	"table" => "glpi_dropdown_network", 
					"field" => "name",
					"linkfield"=>"network",
					"name" => $lang["setup"][88],
					"meta" => 0,
				),
			33 => array(	"table" => "glpi_dropdown_domain", 
					"field" => "name",
					"linkfield"=>"domain",
					"name" => $lang["setup"][89],
					"meta" => 0,
				),
			20 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifaddr",
					"linkfield"=>"",
					"name" => $lang["networking"][14],
					"meta" => 0,
				),
			21 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifmac",
					"linkfield"=>"",
					"name" => $lang["networking"][15],
					"meta" => 0,
				),
			22 => array(	"table" => "glpi_dropdown_netpoint", 
					"field" => "name",
					"linkfield"=>"",
					"name" => $lang["networking"][51],
					"meta" => 0,
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"linkfield"=>"FK_glpi_enterprise",
					"name" => $lang["common"][5],
					"meta" => 0,
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"linkfield"=>"tech_num",
					"name" => $lang["common"][10],
					"meta" => 0,
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"linkfield"=>"",
					"name" => $lang["financial"][20],
					"meta" => 0,
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"linkfield"=>"",
					"name" => $lang["financial"][18],
					"meta" => 0,
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"linkfield"=>"",
					"name" => $lang["financial"][19],
					"meta" => 0,
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"linkfield"=>"",
					"name" => $lang["financial"][82],
					"meta" => 0,
				),
			37 => array(	"table" => "glpi_infocoms",
					"field" => "buy_date",
					"linkfield"=>"",
					"name" => $lang["financial"][14],
					"meta" => 0,
				),
			38 => array(    "table" => "glpi_infocoms",
					"field" => "use_date",
					"linkfield"=>"",
					"name" => $lang["financial"][76],
					"meta" => 0,
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"linkfield"=>"",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
					"meta" => 0,
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"linkfield"=>"",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
					"meta" => 0,
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"linkfield"=>"",
					"name" => $lang["state"][0],
					"meta" => 0,
				),
		),
NETWORKING_TYPE => array(
			1 => array(	"table" => "glpi_networking", 
					"field" => "name",
					"name" => $lang["networking"][0],
					"meta" => 1,
				),
			2 => array(	"table" => "glpi_networking", 
					"field" => "ID",
					"name" => $lang["networking"][50],
					"meta" => 1,
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["networking"][1],
					"meta" => 0,
				),
			4 => array(	"table" => "glpi_type_networking", 
					"field" => "name",
					"name" => $lang["networking"][2],
					"meta" => 1,
				),
			40 => array(	"table" => "glpi_dropdown_model_networking", 
					"field" => "name",
					"name" => $lang["networking"][58],
					"meta" => 1,
				),
			5 => array(	"table" => "glpi_networking", 
					"field" => "serial",
					"name" => $lang["networking"][6],
					"meta" => 1,
				),
			6 => array(	"table" => "glpi_networking", 
					"field" => "otherserial",
					"name" => $lang["networking"][7],
					"meta" => 1,
				),
			7 => array(	"table" => "glpi_networking", 
					"field" => "contact",
					"name" => $lang["networking"][3],
					"meta" => 1,
				),
			8 => array(	"table" => "glpi_networking", 
					"field" => "contact_num",
					"name" => $lang["networking"][4],
					"meta" => 1,
				),
			9 => array(	"table" => "glpi_networking", 
					"field" => "date_mod",
					"name" => $lang["networking"][9],
					"meta" => 1,
				),
			10 => array(	"table" => "glpi_networking", 
					"field" => "comments",
					"name" => $lang["networking"][8],
					"meta" => 1,
				),
			11 => array(	"table" => "glpi_dropdown_firmware", 
					"field" => "name",
					"name" => $lang["networking"][49],
					"meta" => 1,
				),
			20 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifaddr",
					"name" => $lang["networking"][14],
					"meta" => 0,
				),
			21 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifmac",
					"name" => $lang["networking"][15],
					"meta" => 0,
				),
			22 => array(	"table" => "glpi_dropdown_netpoint", 
					"field" => "name",
					"name" => $lang["networking"][51],
					"meta" => 0,
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
					"meta" => 0,
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
					"meta" => 0,
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
					"meta" => 0,
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
					"meta" => 0,
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
					"meta" => 0,
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
					"meta" => 0,
				),
			37 => array(	"table" => "glpi_infocoms",
					"field" => "buy_date",
					"name" => $lang["financial"][14],
					"meta" => 0,
				),
			38 => array(    "table" => "glpi_infocoms",
					"field" => "use_date",
					"name" => $lang["financial"][76],
					"meta" => 0,
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
					"meta" => 0,
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
					"meta" => 0,
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
					"meta" => 0,
				),
		),
PRINTER_TYPE => array(
			1 => array(	"table" => "glpi_printers", 
					"field" => "name",
					"name" => $lang["printers"][5],
					"meta" => 1,
				),
			2 => array(	"table" => "glpi_printers", 
					"field" => "ID",
					"name" => $lang["printers"][19],
					"meta" => 1,
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["printers"][6],
					"meta" => 0,
				),
			4 => array(	"table" => "glpi_type_printers", 
					"field" => "name",
					"name" => $lang["printers"][9],
					"meta" => 1,
				),
			40 => array(	"table" => "glpi_dropdown_model_printers", 
					"field" => "name",
					"name" => $lang["printers"][32],
					"meta" => 1,
				),
			5 => array(	"table" => "glpi_printers", 
					"field" => "serial",
					"name" => $lang["printers"][10],
					"meta" => 1,
				),
			6 => array(	"table" => "glpi_printers", 
					"field" => "otherserial",
					"name" => $lang["printers"][11],
					"meta" => 1,
				),
			7 => array(	"table" => "glpi_printers", 
					"field" => "contact",
					"name" => $lang["printers"][8],
					"meta" => 1,
				),
			8 => array(	"table" => "glpi_printers", 
					"field" => "contact_num",
					"name" => $lang["printers"][7],
					"meta" => 1,
				),
			9 => array(	"table" => "glpi_printers", 
					"field" => "date_mod",
					"name" => $lang["printers"][16],
					"meta" => 1,
				),
			10 => array(	"table" => "glpi_printers", 
					"field" => "comments",
					"name" => $lang["printers"][12],
					"meta" => 1,
				),
			20 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifaddr",
					"name" => $lang["networking"][14],
					"meta" => 0,
				),
			21 => array(	"table" => "glpi_networking_ports", 
					"field" => "ifmac",
					"name" => $lang["networking"][15],
					"meta" => 0,
				),
			22 => array(	"table" => "glpi_dropdown_netpoint", 
					"field" => "name",
					"name" => $lang["networking"][51],
					"meta" => 0,
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
					"meta" => 0,
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
					"meta" => 0,
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
					"meta" => 0,
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
					"meta" => 0,
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
					"meta" => 0,
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
					"meta" => 0,
				),
			37 => array(	"table" => "glpi_infocoms",
					"field" => "buy_date",
					"name" => $lang["financial"][14],
					"meta" => 0,
				),
			38 => array(    "table" => "glpi_infocoms",
					"field" => "use_date",
					"name" => $lang["financial"][76],
					"meta" => 0,
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
					"meta" => 0,
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
					"meta" => 0,
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
					"meta" => 0,
				),
		),
MONITOR_TYPE => array(
			1 => array(	"table" => "glpi_monitors", 
					"field" => "name",
					"name" => $lang["monitors"][5],
					"meta" => 1,
				),
			2 => array(	"table" => "glpi_monitors", 
					"field" => "ID",
					"name" => $lang["monitors"][23],
					"meta" => 1,
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["monitors"][6],
					"meta" => 0,
				),
			4 => array(	"table" => "glpi_type_monitors", 
					"field" => "name",
					"name" => $lang["monitors"][9],
					"meta" => 1,
				),
			40 => array(	"table" => "glpi_dropdown_model_monitors", 
					"field" => "name",
					"name" => $lang["monitors"][31],
					"meta" => 1,
				),
			5 => array(	"table" => "glpi_monitors", 
					"field" => "serial",
					"name" => $lang["monitors"][10],
					"meta" => 1,
				),
			6 => array(	"table" => "glpi_monitors", 
					"field" => "otherserial",
					"name" => $lang["monitors"][11],
					"meta" => 1,
				),
			7 => array(	"table" => "glpi_monitors", 
					"field" => "contact",
					"name" => $lang["monitors"][8],
					"meta" => 1,
				),
			8 => array(	"table" => "glpi_monitors", 
					"field" => "contact_num",
					"name" => $lang["monitors"][7],
					"meta" => 1,
				),
			9 => array(	"table" => "glpi_monitors", 
					"field" => "date_mod",
					"name" => $lang["monitors"][16],
					"meta" => 1,
				),
			10 => array(	"table" => "glpi_monitors", 
					"field" => "comments",
					"name" => $lang["monitors"][12],
					"meta" => 1,
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
					"meta" => 1,
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
					"meta" => 0,
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
					"meta" => 0,
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
					"meta" => 0,
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
					"meta" => 0,
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
					"meta" => 0,
				),
			37 => array(	"table" => "glpi_infocoms",
					"field" => "buy_date",
					"name" => $lang["financial"][14],
					"meta" => 0,
				),
			38 => array(    "table" => "glpi_infocoms",
					"field" => "use_date",
					"name" => $lang["financial"][76],
					"meta" => 0,
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
					"meta" => 0,
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
					"meta" => 0,
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
					"meta" => 0,
				),
		),
PERIPHERAL_TYPE => array(
			1 => array(	"table" => "glpi_peripherals", 
					"field" => "name",
					"name" => $lang["peripherals"][5],
					"meta" => 1,
				),
			2 => array(	"table" => "glpi_peripherals", 
					"field" => "ID",
					"name" => $lang["peripherals"][23],
					"meta" => 1,
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["peripherals"][6],
					"meta" => 0,
				),
			4 => array(	"table" => "glpi_type_peripherals", 
					"field" => "name",
					"name" => $lang["peripherals"][9],
					"meta" => 1,
				),
			40 => array(	"table" => "glpi_dropdown_model_peripherals", 
					"field" => "name",
					"name" => $lang["peripherals"][34],
					"meta" => 1,
				),

			5 => array(	"table" => "glpi_peripherals", 
					"field" => "serial",
					"name" => $lang["peripherals"][10],
					"meta" => 1,
				),
			6 => array(	"table" => "glpi_peripherals", 
					"field" => "otherserial",
					"name" => $lang["peripherals"][11],
					"meta" => 1,
				),
			7 => array(	"table" => "glpi_peripherals", 
					"field" => "contact",
					"name" => $lang["peripherals"][8],
					"meta" => 1,
				),
			8 => array(	"table" => "glpi_peripherals", 
					"field" => "contact_num",
					"name" => $lang["peripherals"][7],
					"meta" => 1,
				),
			9 => array(	"table" => "glpi_peripherals", 
					"field" => "date_mod",
					"name" => $lang["peripherals"][16],
					"meta" => 1,
				),
			10 => array(	"table" => "glpi_peripherals", 
					"field" => "comments",
					"name" => $lang["peripherals"][12],
					"meta" => 1,
				),
			11 => array(	"table" => "glpi_peripherals", 
					"field" => "brand",
					"name" => $lang["peripherals"][18],
					"meta" => 1,
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
					"meta" => 0,
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
					"meta" => 0,
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
					"meta" => 0,
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
					"meta" => 0,
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
					"meta" => 0,
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
					"meta" => 0,
				),
			37 => array(	"table" => "glpi_infocoms",
					"field" => "buy_date",
					"name" => $lang["financial"][14],
					"meta" => 0,
				),
			38 => array(    "table" => "glpi_infocoms",
					"field" => "use_date",
					"name" => $lang["financial"][76],
					"meta" => 0,
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
					"meta" => 0,
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
					"meta" => 0,
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
					"meta" => 0,
				),
		
		),
SOFTWARE_TYPE => array(
			1 => array(	"table" => "glpi_software", 
					"field" => "name",
					"name" => $lang["software"][2],
					"meta" => 1,
				),
			2 => array(	"table" => "glpi_software", 
					"field" => "ID",
					"name" => $lang["software"][1],
					"meta" => 1,
				),
			3 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["software"][4],
					"meta" => 0,
				),
			4 => array(	"table" => "glpi_dropdown_os", 
					"field" => "name",
					"name" => $lang["software"][3],
					"meta" => 0,
				),
			5 => array(	"table" => "glpi_software", 
					"field" => "version",
					"name" => $lang["software"][5],
					"meta" => 1,
				),
			6 => array(	"table" => "glpi_software", 
					"field" => "comments",
					"name" => $lang["software"][6],
					"meta" => 1,
				),
			7 => array(	"table" => "glpi_licenses", 
					"field" => "serial",
					"name" => $lang["software"][11],
					"meta" => 1,
				),
			9 => array(	"table" => "glpi_software", 
					"field" => "date_mod",
					"name" => $lang["computers"][11],
					"meta" => 1,
				),
			23 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
					"meta" => 0,
				),
			24 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
					"meta" => 0,
				),
			25 => array(	"table" => "glpi_infocoms", 
					"field" => "num_immo",
					"name" => $lang["financial"][20],
					"meta" => 0,
				),
			26 => array(	"table" => "glpi_infocoms", 
					"field" => "num_commande",
					"name" => $lang["financial"][18],
					"meta" => 0,
				),
			27 => array(	"table" => "glpi_infocoms", 
					"field" => "bon_livraison",
					"name" => $lang["financial"][19],
					"meta" => 0,
				),
			28 => array(	"table" => "glpi_infocoms", 
					"field" => "facture",
					"name" => $lang["financial"][82],
					"meta" => 0,
				),
			37 => array(	"table" => "glpi_infocoms",
					"field" => "buy_date",
					"name" => $lang["financial"][14],
					"meta" => 0,
				),
			38 => array(    "table" => "glpi_infocoms",
					"field" => "use_date",
					"name" => $lang["financial"][76],
					"meta" => 0,
				),
			29 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27]." ".$lang["financial"][1],
					"meta" => 0,
				),
			30 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4]." ".$lang["financial"][1],
					"meta" => 0,
				),
			31 => array(	"table" => "glpi_dropdown_state", 
					"field" => "name",
					"name" => $lang["state"][0],
					"meta" => 0,
				),
		),
CONTACT_TYPE => array(
			1 => array(	"table" => "glpi_contacts", 
					"field" => "name",
					"name" => $lang["financial"][27],
				),
			2 => array(	"table" => "glpi_contacts", 
					"field" => "ID",
					"name" => $lang["financial"][28],
				),
			3 => array(	"table" => "glpi_contacts", 
					"field" => "phone",
					"name" => $lang["financial"][29],
				),
			4 => array(	"table" => "glpi_contacts", 
					"field" => "phone2",
					"name" => $lang["financial"][29]." 2",
				),
			5 => array(	"table" => "glpi_contacts", 
					"field" => "fax",
					"name" => $lang["financial"][30],
				),
			6 => array(	"table" => "glpi_contacts", 
					"field" => "email",
					"name" => $lang["financial"][31],
				),
			7 => array(	"table" => "glpi_contacts", 
					"field" => "comments",
					"name" => $lang["financial"][12],
				),
			9 => array(	"table" => "glpi_dropdown_contact_type", 
					"field" => "name",
					"name" => $lang["financial"][37],
				),
		),
ENTERPRISE_TYPE => array(
			1 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["financial"][27],
				),
			2 => array(	"table" => "glpi_enterprises", 
					"field" => "ID",
					"name" => $lang["financial"][28],
				),
			3 => array(	"table" => "glpi_enterprises", 
					"field" => "address",
					"name" => $lang["financial"][44],
				),
			4 => array(	"table" => "glpi_enterprises", 
					"field" => "website",
					"name" => $lang["financial"][45],
				),
			5 => array(	"table" => "glpi_enterprises", 
					"field" => "phonenumber",
					"name" => $lang["financial"][29],
				),
			10 => array(	"table" => "glpi_enterprises", 
					"field" => "fax",
					"name" => $lang["financial"][30],
				),
			6 => array(	"table" => "glpi_enterprises", 
					"field" => "email",
					"name" => $lang["financial"][31],
				),
			7 => array(	"table" => "glpi_enterprises", 
					"field" => "comments",
					"name" => $lang["financial"][12],
				),
			9 => array(	"table" => "glpi_dropdown_enttype", 
					"field" => "name",
					"name" => $lang["financial"][79],
				),
		),
//INFOCOM_TYPE => ,
CONTRACT_TYPE => array(
			1 => array(	"table" => "glpi_contracts", 
					"field" => "name",
					"name" => $lang["financial"][27],
				),
			2 => array(	"table" => "glpi_contracts", 
					"field" => "ID",
					"name" => $lang["financial"][28],
				),
			3 => array(	"table" => "glpi_contracts", 
					"field" => "num",
					"name" => $lang["financial"][4],
				),
			4 => array(	"table" => "glpi_dropdown_contract_type", 
					"field" => "name",
					"name" => $lang["financial"][37],
				),
			5 => array(	"table" => "glpi_contracts", 
					"field" => "begin_date",
					"name" => $lang["financial"][7],
				),
			6 => array(	"table" => "glpi_contracts", 
					"field" => "duration",
					"name" => $lang["financial"][8],
				),
			20 => array(	"table" => "glpi_contracts", 
					"field" => "end_date",
					"name" => $lang["financial"][86],
				),
			7 => array(	"table" => "glpi_contracts", 
					"field" => "notice",
					"name" => $lang["financial"][10],
				),
			10 => array(	"table" => "glpi_contracts", 
					"field" => "compta_num",
					"name" => $lang["financial"][13],
				),
			11 => array(	"table" => "glpi_contracts", 
					"field" => "cost",
					"name" => $lang["financial"][5],
				),
		),
CARTRIDGE_TYPE => array(
			1 => array(	"table" => "glpi_cartridges_type", 
					"field" => "name",
					"name" => $lang["cartridges"][1],
				),
			2 => array(	"table" => "glpi_cartridges_type", 
					"field" => "ID",
					"name" => $lang["cartridges"][4],
				),
			3 => array(	"table" => "glpi_cartridges_type", 
					"field" => "ref",
					"name" => $lang["cartridges"][2],
				),
			4 => array(	"table" => "glpi_dropdown_cartridge_type", 
					"field" => "name",
					"name" => $lang["cartridges"][3],
				),
			5 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["common"][5],
				),
			6 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["cartridges"][36],
				),
			7 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
		),
TYPEDOC_TYPE => array(
			1 => array(	"table" => "glpi_type_docs", 
					"field" => "name",
					"name" => $lang["document"][1],
				),
			2 => array(	"table" => "glpi_type_docs", 
					"field" => "ID",
					"name" => $lang["document"][14],
				),
			3 => array(	"table" => "glpi_type_docs", 
					"field" => "ext",
					"name" => $lang["document"][9],
				),
			6 => array(	"table" => "glpi_type_docs", 
					"field" => "icon",
					"name" => $lang["document"][10],
				),				
			4 => array(	"table" => "glpi_type_docs", 
					"field" => "mime",
					"name" => $lang["document"][4],
				),
			5 => array(	"table" => "glpi_type_docs", 
					"field" => "upload",
					"name" => $lang["document"][15],
				),
		),
DOCUMENT_TYPE => array(
			1 => array(	"table" => "glpi_docs", 
					"field" => "name",
					"name" => $lang["document"][1],
				),
			2 => array(	"table" => "glpi_docs", 
					"field" => "ID",
					"name" => $lang["document"][14],
				),
			3 => array(	"table" => "glpi_docs", 
					"field" => "filename",
					"name" => $lang["document"][2],
				),
			4 => array(	"table" => "glpi_docs", 
					"field" => "link",
					"name" => $lang["document"][33],
				),
			5 => array(	"table" => "glpi_docs", 
					"field" => "mime",
					"name" => $lang["document"][4],
				),
			6 => array(	"table" => "glpi_docs", 
					"field" => "comment",
					"name" => $lang["document"][6],
				),
			7 => array(	"table" => "glpi_dropdown_rubdocs", 
					"field" => "name",
					"name" => $lang["document"][3],
				),	
		),
//KNOWBASE_TYPE => "glpi_kbitems",
USER_TYPE => array(
			1 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["setup"][18],
				),
			2 => array(	"table" => "glpi_users", 
					"field" => "ID",
					"name" => $lang["common"][2],
				),
			3 => array(	"table" => "glpi_users", 
					"field" => "realname",
					"name" => $lang["setup"][13],
				),
			4 => array(	"table" => "glpi_users", 
					"field" => "type",
					"name" => $lang["setup"][20],
				),
			5 => array(	"table" => "glpi_users", 
					"field" => "email",
					"name" => $lang["setup"][14],
				),
			6 => array(	"table" => "glpi_users", 
					"field" => "phone",
					"name" => $lang["setup"][15],
				),
			7 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["setup"][3],
				),
			8 => array(	"table" => "glpi_users", 
					"field" => "active",
					"name" => $lang["setup"][400],
				),
		),
//TRACKING_TYPE => "glpi_tracking",
CONSUMABLE_TYPE => array(
			1 => array(	"table" => "glpi_consumables_type", 
					"field" => "name",
					"name" => $lang["consumables"][1],
				),
			2 => array(	"table" => "glpi_consumables_type", 
					"field" => "ID",
					"name" => $lang["consumables"][4],
				),
			3 => array(	"table" => "glpi_consumables_type", 
					"field" => "ref",
					"name" => $lang["consumables"][2],
				),
			4 => array(	"table" => "glpi_dropdown_consumable_type", 
					"field" => "name",
					"name" => $lang["consumables"][3],
				),
			5 => array(	"table" => "glpi_enterprises", 
					"field" => "name",
					"name" => $lang["consumables"][8],
				),
			6 => array(	"table" => "glpi_dropdown_locations", 
					"field" => "completename",
					"name" => $lang["consumables"][36],
				),
			7 => array(	"table" => "glpi_users", 
					"field" => "name",
					"name" => $lang["common"][10],
				),
		),
//CONSUMABLE_ITEM_TYPE => "glpi_consumables",
//CARTRIDGE_ITEM_TYPE => "glpi_cartridges",
//LICENSE_TYPE => "glpi_licenses",
LINK_TYPE => array(
			1 => array(	"table" => "glpi_links", 
					"field" => "name",
					"name" => $lang["links"][1],
				),
			2 => array(	"table" => "glpi_links", 
					"field" => "ID",
					"name" => $lang["links"][0],
				),
		),

);
/*

*/
?>
