<?php $__env->startSection('content'); ?>

<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h3 class="mb-0 bc-title"><b><?php echo e(__('Create Product')); ?></b> </h3>
            <a class="btn btn-primary   btn-sm" href="<?php echo e(route('back.item.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
        </div>
    </div>
</div>

<!-- Form -->


<div class="row">
    <div class="col-lg-12">
            <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<!-- Nested Row within Card Body -->
<form class="admin-form tab-form" action="<?php echo e(route('back.item.store')); ?>" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" value="normal" name="item_type">
                <?php echo csrf_field(); ?>
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">اسم الفاعلية  *</label>
                        <input type="text" name="name" class="form-control item-name"
                            id="name" placeholder="<?php echo e(__('Enter Name')); ?>"
                            value="<?php echo e(old('name')); ?>"  required>
                    </div>
                    <div class="form-group d-none">
                        <label for="slug"><?php echo e(__('Slug')); ?> *</label>
                        <input type="text" name="slug" class="form-control"
                            id="slug" placeholder="<?php echo e(__('Enter Slug')); ?>"
                            value="<?php echo e(old('slug')); ?>" >
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group pb-0  mb-0">
                        <label class="d-block"> صورة للحدث *</label>
                    </div>
                    <div class="form-group pb-0 pt-0 mt-0 mb-0">
                    <img class="admin-img lg" src="" >
                    </div>
                    <div class="form-group position-relative ">
                        <label class="file">
                            <input type="file"   required  accept="image/*"   class="upload-photo" name="photo"
                                id="file"  aria-label="File browser example">
                            <span
                                class="file-custom text-left"> صورة   </span>
                        </label>
                        <br>
                        <span class="mt-1 text-info"><?php echo e(__('Image Size Should Be 800 x 800. or square size')); ?></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group pb-0  mb-0">
                        <label>   صورة خلفية مكبرة للحدث    </label>
                    </div>
                    <div class="form-group pb-0 pt-0 mt-0 mb-0">
                        <div id="gallery-images" class="">
                            <div class="d-block gallery_image_view">
                            </div>
                        </div>
                    </div>
                    <div class="form-group position-relative ">
                        <label class="file">
                            <input type="file"  accept="image/*"  name="galleries[]" id="gallery_file" aria-label="File browser example" accept="image/*" multiple>
                            <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                        </label>
                        <br>
                        <span class="mt-1 text-info"><?php echo e(__('Image Size Should Be 800 x 800. or square size')); ?></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="sort_details"> وصف قصير للفاعلية *</label>
                        <textarea name="sort_details" id="sort_details"
                            class="form-control"
                            placeholder="<?php echo e(__('Short Description')); ?>"
                           required  ><?php echo e(old('sort_details')); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="details"> وصف الفاعلية*</label>
                        <textarea name="details" id="details"
                            class="form-control text-editor"
                            rows="6"
                            placeholder="<?php echo e(__('Enter Description')); ?>"
                          required   ><?php echo e(old('details')); ?></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!--<div class="form-group mb-2">-->
                    <!--    <label for="tags"><?php echo e(__('Product Tags')); ?>-->
                    <!--        </label>-->
                    <!--    <input type="text" name="tags" class="tags"-->
                    <!--        id="tags"-->
                    <!--        placeholder="<?php echo e(__('Tags')); ?>"-->
                    <!--        value="">-->
                    <!--</div>-->
                    <div class="form-group">
                        <label class="switch-primary">
                            <input type="checkbox" class="switch switch-bootstrap status radio-check" name="is_specification" value="1" checked>
                            <span class="switch-body"></span>
                            <span class="switch-text"> التذاكر واسعارها </span>
                        </label>
                    </div>
                    <div id="specifications-section">
                        <div class="d-flex">

                       
                            <div class="flex-grow-1">
                                <div class="form-group">
                                    <input required  type="text" class="form-control"
                                        name="specification_description[]"
                                        placeholder="اسم التذكرة" value="">
                                    </div>
                            </div>
                            
                            
                            
                                 <div class="flex-grow-1">
                                <div class="form-group">
                                    <input required  type="number" class="form-control"
                                        name="specification_name[]"
                                        placeholder="سعر التذكرة" value="">
                                    </div>
                            </div>
                            <div class="flex-btn">
                                <button type="button" class="btn btn-success add-specification" data-text="<?php echo e(__('Specification Name')); ?>" data-text1="<?php echo e(__('Specification Description')); ?>"> <i class="fa fa-plus"></i> </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!--<div class="form-group">-->
                    <!--    <label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?>-->
                    <!--        </label>-->
                    <!--    <input type="text" name="meta_keywords" class="tags"-->
                    <!--        id="meta_keywords"-->
                    <!--        placeholder="<?php echo e(__('Enter Meta Keywords')); ?>"-->
                    <!--        value="">-->
                    <!--</div>-->

                    <div class="form-group">
                        <label
                            for="meta_description"> العنوان بالتفصيل 
                            </label>
                        <textarea  required name="meta_description" id="meta_description"
                            class="form-control" rows="5"
                            placeholder="<?php echo e(__('Enter Meta Description')); ?>"
                        ><?php echo e(old('meta_description')); ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" class="check_button" name="is_button" value="0">
                    <button type="submit" class="btn btn-secondary mr-2"><?php echo e(__('Save')); ?></button>
                    <button type="submit" class="btn btn-info save__edit"><?php echo e(__('Save & Edit')); ?></button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="discount_price"> الأسعار تبدء من 
                            *</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span
                                    class="input-group-text"><?php echo e(PriceHelper::adminCurrency()); ?></span>
                            </div>
                            <input type="text" id="discount_price"
                                name="discount_price" class="form-control"
                                placeholder="<?php echo e(__('Enter Current Price')); ?>"
                                min="1" step="0.1"
                                value="<?php echo e(old('discount_price')); ?>" >
                        </div>
                    </div>

                    <!--<div class="form-group">-->
                    <!--    <label for="previous_price"><?php echo e(__('Previous Price')); ?>-->
                    <!--        </label>-->
                    <!--    <div class="input-group mb-3">-->
                    <!--        <div class="input-group-prepend">-->
                    <!--            <span-->
                    <!--                class="input-group-text"><?php echo e($curr->sign); ?></span>-->
                    <!--        </div>-->
                    <!--        <input type="text" id="previous_price"-->
                    <!--            name="previous_price" class="form-control"-->
                    <!--            placeholder="<?php echo e(__('Enter Previous Price')); ?>"-->
                    <!--            min="1" step="0.1"-->
                    <!--            value="<?php echo e(old('previous_price')); ?>" >-->
                    <!--    </div>-->
                    <!--</div>-->




                    <div class="form-group">
                        <label for="previous_price"> موعد الحدث 
                            </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <!--<span-->
                                <!--    class="input-group-text"><?php echo e($curr->sign); ?></span>-->
                            </div>
                            <input  required type="text" id="event_date"
                                name="event_date" class="form-control"
                                placeholder="<?php echo e(__('Enter offer Date')); ?>"
                            
                                value="<?php echo e(old('event_date')); ?>" >
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="category_id"> نوع الفاعلية  *</label>
                        <select required  name="category_id" id="category_id" data-href="<?php echo e(route('back.get.subcategory')); ?>" class="form-control" >
                            <option value="" selected><?php echo e(__('Select One')); ?></option>
                            <?php $__currentLoopData = DB::table('categories')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group d-none">
                        <label for="subcategory_id"><?php echo e(__('Select Sub Category')); ?> </label>
                        <select    name="subcategory_id" id="subcategory_id" data-href="<?php echo e(route('back.get.childcategory')); ?>" class="form-control">
                            <option value=""><?php echo e(__('Select One')); ?></option>
                        </select>
                    </div>

                    <div class="form-group d-none">
                        <label for="childcategory_id"><?php echo e(__('Select Child Category')); ?> </label>
                        <select name="childcategory_id" id="childcategory_id" class="form-control">
                            <option value=""><?php echo e(__('Select One')); ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="brand_id"> المدينة </label>
                        <select name="brand_id" id="brand_id" class="form-control"  required>
                             <?php $__currentLoopData = DB::table('brands')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group d-none">
                        <label for="stock"><?php echo e(__('Total in stock')); ?>

                            *</label>
                        <div class="input-group mb-3">
                            <input type="number" id="stock"
                                name="stock" class="form-control"
                                placeholder="<?php echo e(__('Total in stock')); ?>" value="99" >
                        </div>
                    </div>
                    <div class="form-group d-none">
                        <label for="tax_id"><?php echo e(__('Select Tax')); ?> *</label>
                        <select name="tax_id" id="tax_id" class="form-control">
                            <option value=""><?php echo e(__('Select One')); ?></option>
                             <option selected value="0">0</option>
                         </select>
                    </div>
                    <div class="form-group d-none">
                        <label for="sku"><?php echo e(__('SKU')); ?> *</label>
                        <input type="text" name="sku" class="form-control"
                            id="sku" placeholder="<?php echo e(__('Enter SKU')); ?>"
                            value="<?php echo e(Str::random(10)); ?>" >
                    </div>
                    <div class="form-group d-none">
                        <label for="video"><?php echo e(__('Video Link')); ?> </label>
                        <input type="text" name="video" class="form-control"
                            id="video" placeholder="<?php echo e(__('Enter Video Link')); ?>"
                            value="<?php echo e(old('video')); ?>">
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>


</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webok/public_html/core/resources/views/back/item/create.blade.php ENDPATH**/ ?>