@extends('layouts.main')
@section('content_section')
    <div class="col-md-12 col-lg-12 no_padding open_course_Filter">
        <div class="col-md-12 course_details_box">
            <div class="col-md-2 course_image_box">
                <div class="img_course_detail_view">
                    <img src="/images/courses/thumb/thumb_{{ $courseDetails->course_image_path }}" class="img-responsive" style="border-radius: 50%;">
                </div>
            </div>
            <div class="col-md-10 courses_detail_info">
            <h3>{{ $courseDetails->course_title }}</h3>

                {!! $courseDetails->description !!}
                
            </div>
        </div>

        <div class="col-md-12 panel-heading menu_items_lists">
            <!-- Menus Start-->
            @include('course.menus', ['menu' => 'subject'])
            <!-- Menus End-->
            <div class="col-md-12 space-control">
                <div class="col-md-12 course_menu_des_style">
                    <div class="col-md-12 courses_detail_info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="add_ntn_box">
                                    <a class="btn btn-default" href="javascript:void(0)" data-toggle="modal" data-target="#subjectAddModal"><img src="/assets/img/Add.png"> Add Subject</a>
                                </div>
                                <!--Add Subject Modal -->
                                <div class="modal fade" id="subjectAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Add Subject</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-success" role="alert" id="subject_success_message" style="display: none;"></div>
                                                <div class="alert alert-danger" role="alert" id="subject_danger_message" style="display: none;"></div>
                                                <form class="form-horizontal" id="subjectForm" role="form" action="#"
                                                                                      method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"
                                                               for="course_subject">Course Subject</label>
                                                        <div class="col-sm-9">
                                                            <input type="hidden" name="course_id" value="{{ $course_id }}" />
                                                            <input type="text" class="form-control" name="course_subject"
                                                                   id="course_subject" placeholder="Course Title"
                                                                   value=""/>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn_btn" onclick="save_subject();return false;">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-md-12">
                                @if(Session::has('subject_delete'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        {{ session::get('subject_delete') }}
                                    </div>
                                @endif

                                @if(Session::has('subject_delete_failed'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        {{ session::get('subject_delete_failed') }}
                                    </div>
                                @endif
                                <table class="table table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courseSubjects as $subject)
                                        @if($subject->status == 'active')
                                            <tr>
                                                <td>{{ $subject->subject_title }}</td>
                                                <td>{{ $subject->name }}</td>
                                                <td>
                                                    <a href="#" class="contentReorder" data-id="{{ $subject->id }}" title="Reorder Contents">
                                                        <i class="fa fa-arrows-alt" data-toggle="tooltip" title="Reorder Contents" aria-hidden="true"></i>
                                                    </a>
                                                    | <a href="{{ route('deleteCourseSubject', $subject->id) }}"
                                                         class="delete_icon_anc"
                                                         onclick="return confirm(' you want to delete?');">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Content Modal -->
                        <div class="modal fade" id="contentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Re-order Contents</h4>
                                    </div>
                                    <div class="modal-body" >
                                        <iframe src="" id="reorder-view" width="100%" height="400" frameborder="0"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function save_subject() {
            var form_data = $('#subjectForm').serialize();
            var url = "{{ route('addSubject') }}"
            $.ajax({
               type: "POST",
               url: url,
               data: $("#subjectForm").serialize(), // serializes the form's elements.
               beforeSend : function () {
                   console.log($("#subjectForm").serialize());
               },
               success: function(data) {
                   if(data.status == true) {
                       $("#subject_success_message").html(data.message);
                       $("#subject_success_message").show();
                       setTimeout(function() {
                           location.reload();//$('#subjectAddModal').modal('hide');
                       }, 500);
                   } else {
                       $("#subject_danger_message").html(data.message);
                       $("#subject_danger_message").show();
                   }
               }
            });
        }
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip({
                    container: 'body',
                    placement: 'top'
                }
            );
            $(".contentReorder").click(function() {
                var subject_id = $(this).attr('data-id');
                var url = '/course/subject/content-reorder/' + subject_id;
                $("#reorder-view").attr('src', url);
                $('#contentModal').modal('show');
            });
        });

    </script>
@endsection