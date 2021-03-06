<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\CoreHome\Categories;

use Piwik\Category\Category;
use Piwik\Piwik;
use Piwik\Url;

class VisitorsCategory extends Category
{
    protected $id = 'General_Visitors';
    protected $order = 5;
    protected $icon = 'icon-reporting-visitors';

    public function getHelp()
    {
        $visitsLogUrl = Url::getQueryStringFromParameters([
            'category' => 'General_Visitors',
            'subcategory' => 'Live_VisitorLog',
        ]);
        $visitsLogUrl = '<a href="?' . htmlspecialchars($visitsLogUrl) . '" rer="noreferrer noopener">';

        $helpText = '<p>' . Piwik::translate('CoreHome_VisitorsCategoryHelp1') . '</p><br/>';
        $helpText .= '<p>' . Piwik::translate('CoreHome_VisitorsCategoryHelp2', [$visitsLogUrl, '</a>']) . '</p>';

        return $helpText;
    }
}
