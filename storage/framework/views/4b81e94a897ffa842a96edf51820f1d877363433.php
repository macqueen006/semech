<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!-- main content -->
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Comments</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ml-10">
                                    <a href="<?php echo e(route('admin.comments.create')); ?>" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                <tr>
                                    <th scope="col">title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Teacher</th>
                                    <th scope="col">Lesson</th>
                                    <th scope="col">Enrolled</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="data_table.html#" class="question_content"> title here 1</a></th>
                                    <td>Category name</td>
                                    <td>Teacher James</td>
                                    <td>Lessons name</td>
                                    <td>16</td>
                                    <td>$25.00</td>
                                    <td><a href="data_table.html#" class="status_btn">Active</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/admin/comments/index.blade.php ENDPATH**/ ?>