<?php

namespace App\Admin\Controllers;

use App\Models\product;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class productController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new product());

        $grid->column('Product ID', __('Product ID'));
        $grid->column('Product Name', __('Product Name'));
        $grid->column(' Amount', __(' Amount'));
        $grid->column('Price', __('Price'));
        $grid->column('Production company', __('Production company'));
        $grid->column('Product Type ID', __('Product Type ID'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(product::findOrFail($id));

        $show->field('Product ID', __('Product ID'));
        $show->field('Product Name', __('Product Name'));
        $show->field(' Amount', __(' Amount'));
        $show->field('Price', __('Price'));
        $show->field('Production company', __('Production company'));
        $show->field('Product Type ID', __('Product Type ID'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new product());

        $form->number('Product ID', __('Product ID'));
        $form->text('Product Name', __('Product Name'));
        $form->switch(' Amount', __(' Amount'));
        $form->number('Price', __('Price'));
        $form->text('Production company', __('Production company'));
        $form->number('Product Type ID', __('Product Type ID'));

        return $form;
    }
}
