@extends('layouts.frontend.frontex')

@section('title','Complain')

@push('css')

@endpush

@section('content')

            <div class="container">
                <div class="complain-box" style="padding: 50px;">
                    <h3 class="text-center">প্রশ্ন/অভিযোগ করুন আমাদেরকে </h3>
                    <div class="tg-description">

                        <form method="POST" action="" accept-charset="UTF-8" role="form" class="form-horizontal" enctype="multipart/form-data">


                            <div class="form-group ">
                                <label for="topics" class="control-label">দপ্তরসমূহ: </label>
                                <div class="">
                                    <select class="form-control" name="offices_id"><option selected="selected" disabled="disabled" hidden="hidden" value="">&lt;-- দপ্তরসমূহ --&gt;</option><option value="1">উপজেলা চেয়ারম্যানের কর্যালয়</option><option value="2">উপজেলা নির্বাহী অফিসারের কার্যালয়</option><option value="3">উপজলা স্বাস্থ্য ও পঃ পঃ কর্মকর্তার কার্যালয়</option><option value="5">মমিনপুর ইউনিয়ন পরিষদ</option><option value="6">খলেয়া ইউনিয়ন পরিষদ</option><option value="7">সদ্যপুষ্করনী ইউনিয়ন পরিষদ</option><option value="9">চন্দনপাট ইউনিয়ন পরিষদ</option><option value="11">বরেন্দ্র বহুমুখী উন্নয়ন কর্তৃপক্ষ</option><option value="12">হরিদেবপুর ইউনিয়ন পরিষদ</option><option value="14">উপজেলা মাৎস কর্মকর্তার কার্যালয়</option><option value="15">উপজেলা প্রকৌশলীর কার্যালয়</option><option value="16">সহকারী কমিশনার (ভূমি) এর কার্যালয়</option><option value="17">উপজেলা সমবায় অফিসারের কার্যালয়</option><option value="18">উপজেলা যুব উন্নয়ন কর্মকর্তার কার্যালয়</option><option value="19">উপজেলা মহিলা বিষয়ক কর্মকর্তার কার্যালয়</option><option value="20">উপজেলা শিক্ষা অফিস</option><option value="21">উপজেলা সমাজসেবা অফিসারের কার্যালয়</option><option value="22">উপজেলা মাধ্যমিক শিক্ষা অফিস</option><option value="23">উপজেলা প্রকল্প বাস্তবায়ন কর্মকর্তার কার্যালয়</option></select>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="topics" class="control-label">অভিযোগ এর বিষয়: </label>
                                <div class="">
                                    <input class="form-control" placeholder="অভিযোগ এর বিষয়" name="topics" type="text" id="topics">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="name" class="control-label">আপনার নাম : </label>
                                <div class="">
                                    <input class="form-control" placeholder="আপনার নাম" name="name" type="text" id="name">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="complain" class="control-label">অভিযোগ লিখুন : </label>
                                <div class="">
                                    <textarea class="form-control" placeholder="অভিযোগ লিখুন" name="complain" cols="50" rows="10" id="complain"></textarea>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="mobile" class="control-label">আপনার মোবাইল নাম্বার : </label>
                                <div class="">
                                    <input class="form-control" placeholder="আপনার মোবাইল নাম্বার" name="mobile" type="text" id="mobile">
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="address" class="control-label">আপনার ঠিকানা: </label>
                                <div class="">
                                    <input class="form-control" placeholder="আপনার ঠিকানা" name="address" type="text" id="address">
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="email" class="control-label">আপনার ইমেইল : </label>
                                <div class="">
                                    <input class="form-control" placeholder="আপনার ইমেইল" name="email" type="text" id="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-8 col-sm-4 text-right">
                                    <button type="submit" class="btn btn-info">পাঠান</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>


@endsection

@push('scripts')

@endpush