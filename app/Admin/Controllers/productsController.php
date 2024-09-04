<?php

namespace App\Admin\Controllers;

use App\Models\products;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class productsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new products());

        $grid->column('product_id', __('Product id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('img_product', __('Img product'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('price', __('Price'));
        $grid->column('product_detail', __('Product detail'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('Product_date(date)', __('Product date(date)'));
        $grid->column('Product_view', __('Product view'));
        $grid->column('numberOfSale', __('NumberOfSale'));

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
        $show = new Show(products::findOrFail($id));

        $show->field('product_id', __('Product id'));
        $show->field('product_name', __('Product name'));
        $show->field('img_product', __('Img product'));
        $show->field('brand_id', __('Brand id'));
        $show->field('price', __('Price'));
        $show->field('product_detail', __('Product detail'));
        $show->field('quantity', __('Quantity'));
        $show->field('Product_date(date)', __('Product date(date)'));
        $show->field('Product_view', __('Product view'));
        $show->field('numberOfSale', __('NumberOfSale'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new products());

        $form->number('product_id', __('Product id'));
        $form->text('product_name', __('Product name'));
        $form->text('img_product', __('Img product'));
        $form->number('brand_id', __('Brand id'));
        $form->number('price', __('Price'));
        $form->textarea('product_detail', __('Product detail'));
        $form->number('quantity', __('Quantity'));
        $form->date('Product_date(date)', __('Product date(date)'))->default(date('Y-m-d'));
        $form->number('Product_view', __('Product view'));
        $form->number('numberOfSale', __('NumberOfSale'));

        return $form;
    }
}
