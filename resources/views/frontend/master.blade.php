<!DOCTYPE html>
<html lang="en">

@include('frontend.includes.head')

<body class="">

<!-- Add your content of header -->
<div class="background-color-layer" style="background-image: url('{{asset('frontend/assets/images/img-01.jpg')}}')"
></div>
<main class="content-wrapper">
  <header class="white-text-container section-container">
    <div class="text-center">
      @foreach ($name as $item)
      <h1>{{$item->your_name}}</h1>
      <p>{{$item->your_position}}</p>

      @endforeach
      <p>
        @foreach ($social as $item)
        <a class="fa-icon fa-icon-2x" href="{{$item->link}}" title="">
            <i class="{{$item->icon}}"></i>
          </a>
        @endforeach
      </p>
    </div>
  </header>



<!-- Add your site or app content here -->

 <div class="container">
   <div class="row">
     <div class="col-xs-12">

        <div class="card">
          <div class="card-block">
            <h2>About me</h2>
           @foreach ($about as $item)
           <div class="row">
            <div class="col-md-4">
              <p><img src="{{asset(BlogImage().$item->about_image)}}" class="img-responsive" alt=""></p>
            </div>
            <div class="col-md-8">

            <p>{{$item->about_discription}}</p>


            </div>
          </div>

           @endforeach
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Projects</h2>
            <div class="row">
             @foreach ($project as $item)
             <a href="#">
                <div class="col-md-4">
                    <img src="{{asset(BlogImage().$item->project_image)}}" class="img-responsive" alt="">
                    <h3 class="h5">{{$item->project_name}}</h3>
                    <p>{{$item->project_year}}</p>
                  </div>
             </a>
             @endforeach


            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Work</h2>
           @foreach ($work as $item)
           <div class="work-experience">
            <small class="date">{{$item->work_year}}</small>
            <h3 class="h5 date-title">{{$item->work_post}} - <a href="{{$item->work_company_link}}" title="Create professionnal website">{{$item->work_company_name}}</a></h3>


            <p>{{$item->work_description}}</p>
          </div>

           @endforeach
          </div>
        </div>


        <div class="card">
          <div class="card-block">
            <h2>Education</h2>
            <div class="row">
                @foreach ($education as $item)
              <div class="col-md-4">

                <div class="education-experience">
                    <small class="date">{{$item->education_year}}</small>
                    <h3 class="h5 date-title">{{$item->education_degree}}</h3>
                    <p>{{$item->education_institution}}</p>
                  </div>


              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Language</h2>
            <div class="row">
              @foreach ($language as $item)
              <div class="col-md-4">
                <div class="language-experience">
                  <h3 class="h5">{{$item->name}}</h3>
                  <h3 class="h5">Reading: <small>{{$item->reading}}</small> </h3>
                  <h3 class="h5">Speking: <small>{{$item->speking}}</small> </h3>
                  <h3 class="h5">Listening: <small>{{$item->listening}}</small> </h3>
                  <h3 class="h5">Writing: <small>{{$item->writing}}</small> </h3>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Upcomimg Projects</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{asset('frontend/assets/images/img-05.jpg')}}" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Jules for Bastion</h3>
                  <p>2017</p>
                </div>
              </div>
              <div class="item">
                <img src="{{asset('frontend/assets/images/img-06.jpg')}}" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Jules for Bastion</h3>
                  <p>2017</p>
                </div>
              </div>

              <div class="item">
                <img src="{{asset('frontend/assets/images/img-08.jpg')}}" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Jules for Bastion</h3>
                  <p>2017</p>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

          </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Social Network</h2>
            <div class="row">
              <div class="col-md-3">
                <p class="social-buttons"><a href="https://twitter.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-twitter"></i></span>@David_Folley</a></p>
              </div>
              <div class="col-md-3">
                <p class="social-buttons"><a href="https://www.linkedin.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-linkedin"></i></span>David Folley</a></p>
              </div>
              <div class="col-md-3">
                <p class="social-buttons"><a href="https://dribbble.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-dribbble"></i></span>David Folley</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Contact</h2>
            <form action="" class="reveal-content">
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Enter your message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class=" btn btn-primary">Send message</button>
              </div>
            </form>
          </div>
        </div>

     </div>
   </div>
 </div>

</main>
@include('frontend.includes.footer')

@include('frontend.includes.scripts')

</html>
