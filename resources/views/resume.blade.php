<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
<style>
        body {
            font-size: 17px;
        }
        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <div class="container">
<section class="heading">
    <h2>
        {{$user->details->fullname}}
        <p>Email: {{$user->details->email}}</p>
        <p>Phone: {{$user->details->phone}}</p>
        <p>Address: {{$user->details->address}}</p>
    </h2>
</section> 
<section class="summary">
    <h2>summary</h2>
    <strong>
        <p>{{$user->details->summary}}</p>
    </strong>
    
</section>

    <section class="education">
    <h2>education</h2>
    @foreach($user->education as $e)
<h4>Degree :{{$e->degree}}</h4>
<p>School : {{$e->school_name}}</p>
<p>Start Date : {{$e->graduation_start_date}}</p>
<p>End Date : {{$e->graduation_end_date}}</p>


    @endforeach

    </section>
    <section class="work">
        <h2>Work History</h2>
@foreach($user->experience as $e)

<h3> JobTitle : {{$e->job_title}}</h3>
<p> Employer :{{$e->employer}}</p>
<p> StartDate : {{$e->start_date}}</p>
<p> EndDate :{{$e->end_date}}</p>


 @endforeach

    </section>
    <section class="skills">
        <h2>Skills</h2>
        @foreach($user->skills as $skill)
<h4>{{$skill->name}} ({{$skill->rating}} out of 100)</h4>
        @endforeach
    
    </div>

</body>
</html>