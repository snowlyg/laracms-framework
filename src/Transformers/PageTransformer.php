<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    snowlyg <snowlyg@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/snowlyg/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace snowlyg\Laracms\Transformers;

use snowlyg\Laracms\Models\Page;
use League\Fractal\TransformerAbstract;

class PageTransformer extends TransformerAbstract
{
    public function transform(Page $page)
    {
        return [
            'id' => $page->id,
            'object_id' => $page->object_id,
            'title' => $page->title,
            'subtitle' => $page->subtitle,
            'keywords' => $page->keywords,
            'description' => $page->description,
            'author' => $page->author,
//            'thumb' => $page->getThumb(),
            'content' => $page->content,
            'is_link' => $page->is_link,
            'link' => $page->getLink(),
            'created_at' => $page->created_at->toDateTimeString(),
            'updated_at' => $page->updated_at->toDateTimeString(),
        ];
    }

}