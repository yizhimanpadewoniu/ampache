<?php
/* vim:set tabstop=8 softtabstop=8 shiftwidth=8 noexpandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2013 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

$web_path = Config::get('web_path');
?>
<td class="cel_catalog"><?php echo $catalog->f_name_link; ?></td>
<td class="cel_path"><?php echo scrub_out($catalog->f_path); ?></td>
<td class="cel_lastverify"><?php echo scrub_out($catalog->f_update); ?></td>
<td class="cel_lastadd"><?php echo scrub_out($catalog->f_add); ?></td>
<td class="cel_lastclean"><?php echo scrub_out($catalog->f_clean); ?></td>
<td class="cel_action">
	<a href="<?php echo $web_path; ?>/admin/catalog.php?action=add_to_catalog&amp;catalogs[]=<?php echo $catalog->id; ?>"><?php echo T_('Add'); ?></a>
	| <a href="<?php echo $web_path; ?>/admin/catalog.php?action=update_catalog&amp;catalogs[]=<?php echo $catalog->id; ?>"><?php echo T_('Verify'); ?></a>
        | <a href="<?php echo $web_path; ?>/admin/catalog.php?action=clean_catalog&amp;catalogs[]=<?php echo $catalog->id; ?>"><?php echo T_('Clean'); ?></a>
	| <a href="<?php echo $web_path; ?>/admin/catalog.php?action=full_service&amp;catalogs[]=<?php echo $catalog->id; ?>"><?php echo T_('Update'); ?></a>
	| <a href="<?php echo $web_path; ?>/admin/catalog.php?action=gather_album_art&amp;catalogs[]=<?php echo $catalog->id; ?>"><?php echo T_('Gather Art'); ?></a>
	| <a href="<?php echo $web_path; ?>/admin/catalog.php?action=show_delete_catalog&amp;catalog_id=<?php echo $catalog->id; ?>"><?php echo T_('Delete'); ?></a>
</td>
