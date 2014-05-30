<?php
namespace Vtsot\CmsBundle\Form\Type\Image;

use Admingenerated\VtsotCmsBundle\Form\BaseImageType\EditType as BaseEditType;

/**
 * EditType
 */
class EditType extends BaseEditType
{

    /**
     * Получить имя формы 
     * @return string
     */
    public function getName()
    {
        return 'upload_image';
    }
    
}
