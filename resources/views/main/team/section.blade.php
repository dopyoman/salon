<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {{--@date['team']->heading --}}
                <h2 class="section-heading">Our Amazing Team</h2>
                {{--@date['team']->sub_heading --}}
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            {{-- @foreach($data['members'] as $member --}}
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/{{-- $member->image --}}" class="img-responsive img-circle" alt="">
                    <h4>{{-- $member->name --}}</h4>
                    <p class="text-muted">{{-- $member->position --}}</p>
                    <ul class="list-inline social-buttons">
                        {{-- @foreach($member->social_medias as $social_media --}}
                        <li>
                            <a href="{{-- $social_media->link --}}">
                                <i class="{{-- $social_media->class --}}"></i>
                            </a>
                        </li>
                        {{--@endforeach--}}

                    </ul>
                </div>
            </div>
            {{--@endforeach--}}
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                {{--@date['team']->body --}}
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>