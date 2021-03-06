<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use FOF30\Utils\FEFHelper\Html as FEFHtml;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/** @var $this \Akeeba\ReleaseSystem\Admin\View\Environments\Html */

defined('_JEXEC') or die;

?>
@extends('admin:com_ars/Common/browse')

@section('browse-filters')
    @searchfilter('search', 'search', 'LBL_ENVIRONMENTS_TITLE')
@stop

@section('browse-table-header')
    <tr>
        <th width="32">
            @jhtml('FEFHelper.browse.checkall')
        </th>
        <th>
            @sortgrid('title', 'LBL_ENVIRONMENTS_TITLE')
        </th>
    </tr>
@stop

@section('browse-table-body-withrecords')
	<?php $i = 0; ?>
    @foreach($this->items as $row)
        <tr>
            <td><?php echo HTMLHelper::_('grid.id', ++$i, $row->id); ?></td>
            <td>
                <a href="index.php?option=com_ars&view=Environment&task=edit&id={{{ $row->id }}}">
                    {{{ $row->title }}}
                </a>
            </td>
        </tr>
    @endforeach
@stop