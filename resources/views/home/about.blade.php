@extends('layouts.app')
@section('title', 'About Us')

@section('content')


    <Section>
        <h1>About Us</h1>

        <p>LestackLabs Academy is an educational publishing and service provider for basic and
            higher education, and professional learning in Ghana.</p>
    </Section>

    <nav>
        <a href="#">Who we are</a>
        <span> | </span>
        <a href="#">Our Leadership</a>
        <span> | </span>
        <a href="#">Our Leastest News </a>
    </nav>

    <Section>
        <h1>Empowering every learner to reach their full potential at every stage of life.</h1>

        <p>At LestackLabs Academy, our vision is to meet the developing needs of educators and learners by delivering trusted, high-quality content and digital solutions that
            enable students to make meaningful progress toward their goals.</p>
    </Section>

    <section>

        <h1>Our Leadership</h1>

        <p>Our Leadership team brings together experienced educators, technologists, and innovators
            committed to advancing learning outcomes. With a shared focus on quality, integrity, and impact, they guide LestackLabs in
            delivering effective educational solutions that empower both learners and educators.</p>

        <div>

            <x-leadership leader-name="Philip Moyer" leader-brief="President and Chief Executive Officer"/>
            <x-leadership leader-name="David Cortese" leader-brief="Executive Vice President and Chief Digital Information Officer"/>
            <x-leadership leader-name="Scott Grillo" leader-brief="President, Global Professional"/>
            <x-leadership leader-name="Catherine McManus" leader-brief="Chief Communications Officer"/>



{{--          <x-leadership>--}}
{{--            <x-slot name="leaderName">John Doe</x-slot>--}}
{{--            <x-slot name="leaderBrief">CEO & Founder</x-slot>--}}
{{--            </x-leadership>--}}
        </div>

    </section>








@endsection
