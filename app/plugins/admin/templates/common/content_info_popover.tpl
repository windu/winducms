<table class='table-popover'>
        <tbody>
          <tr>
            <td><i class='icon-share icon-white'></i></td>
            <td><strong>{$page->createTime}</strong></td>
          </tr>
          <tr>
            <td><i class='icon-edit icon-white'></i></td>
            <td><strong>{$page->updateTime}</strong></td>
          </tr>
          <tr>
            <td><i class='icon-hdd icon-white'></i></td>
            <td><strong>{$page->createIP}</strong></td>
          </tr>
          <tr>
            <td><i class='icon-hdd icon-white'></i></td>
            <td><strong>{$page->updateIp}</strong></td>
          </tr>
          <tr>
            <td><i class='icon-globe icon-white'></i></td>
            <td><strong><a href='{$HOME}{$page->urlKey}' target='_blank'>{$page->urlKey}</a></strong></td>
          </tr>
          <tr>
            <td><i class='icon-qrcode icon-white'></i></td>
            <td><strong>{literal}{{eval var=$pagesDB->get({/literal}{$page->id}{literal},content) }}{/literal}</strong></td>
          </tr>                                        
        </tbody>
</table>
