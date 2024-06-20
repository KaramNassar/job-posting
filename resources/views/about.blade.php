@extends('layouts.app')

@section('content')
	<x-page-heading>About Career Spring</x-page-heading>


	<div class="container mx-auto px-4 py-16">

		<div class="flex flex-col md:flex-row md:space-x-8">
			<div class="flex flex-col space-y-4 text-gray-700 dark:text-gray-300">
				<p class="text-xl leading-loose">
					Welcome to Career Spring, your ultimate destination for finding the perfect job opportunities that
					match your skills and aspirations. Whether you are starting your career journey or looking to make a
					significant change, Career Spring is here to support you every step of the way.
				</p>

				<h2 class="text-2xl font-semibold mb-2">Our Mission:</h2>
				<ul class="list-disc space-y-2">
					<li class="mb-4"><span class="font-bold text-lg">Increase Access to Career Resources:</span> We
						provide students with a comprehensive suite of
						resources, including job postings, career advice, and networking opportunities.
					</li>
					<li class="mb-6"><span class="font-bold text-lg">Develop Career Skills:</span> We offer workshops,
						webinars, and mentorship programs to help students
						cultivate essential skills for the workforce.
					</li>
					<li class="mb-6"><span class="font-bold text-lg">Build Confidence and Self-Belief:</span> We foster
						a supportive community where students can
						connect with peers and professionals, gain valuable insights, and strengthen their belief in
						their career aspirations.
					</li>
				</ul>
			</div>
		</div>

		<h2 class="text-2xl font-semibold text-center mt-12 mb-4 dark:text-white">Why Support Students?</h2>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
			<div class="p-4 rounded-lg shadow-md dark:bg-gray-700 dark:text-white">
				<h3 class="text-xl font-semibold mb-2">Highly Motivated and Resilient</h3>
				<p class="text-gray-700 dark:text-gray-300"> students are a highly motivated and resilient
					population with immense potential. They bring unique perspectives and experiences to the workplace,
					often demonstrating exceptional work ethic and a strong desire to give back.</p>
			</div>

			<div class="p-4 rounded-lg shadow-md dark:bg-gray-700 dark:text-white">
				<h3 class="text-xl font-semibold mb-2">Facing Challenges</h3>
				<p class="text-gray-700 dark:text-gray-300">However, they can face challenges due to limited career
					guidance and access to professional networks.</p>
			</div>
		</div>

		<h2 class="text-2xl font-semibold text-center mt-12 mb-4 dark:text-white">How We Make a Difference:</h2>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
			<div class="p-4 rounded-lg shadow-md dark:bg-gray-700 dark:text-white">
				<h3 class="text-xl font-semibold mb-2">Expands Job Opportunities</h3>
				<p class="text-gray-700 dark:text-gray-300">We connect talented students with a wider range of
					employers seeking diverse and qualified candidates.</p>
			</div>

			<div class="p-4 rounded-lg shadow-md dark:bg-gray-700 dark:text-white">
				<h3 class="text-xl font-semibold mb-2">Empowers Students</h3>
				<p class="text-gray-700 dark:text-gray-300">We provide the tools and resources necessary for students to
					take ownership of their career journeys.</p>
			</div>

			<div class="p-4 rounded-lg shadow-md dark:bg-gray-700 dark:text-white">
				<h3 class="text-xl font-semibold mb-2">Strengthens the Workforce</h3>
				<p class="text-gray-700 dark:text-gray-300">We contribute to building a more inclusive and dynamic
					professional landscape.</p>
			</div>
		</div>

		<h2 class="text-2xl font-semibold text-center mt-12 mb-4 dark:text-white">Join Us in Making a Difference:</h2>

		<p class="text-center text-gray-700 dark:text-gray-300">Whether you're an employer seeking exceptional talent, a
			professional willing to share your expertise, or a donor invested in education and equity, we welcome your
			participation. Together, we can create a brighter future for students and unlock their full potential
			in the workforce.</p>

		<div class="flex justify-center mt-8">
			<a href="{{ route('jobs.index') }}"
			   class="px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-700 dark:bg-gray-700 dark:hover:bg-gray-600">Get
				Involved</a>
		</div>

		<div class="text-center mt-8">
			<p class="text-gray-500 dark:text-gray-400">Contact Us:</p>
			<a href="{{ route('contact.create') }}" class="text-blue-500 hover:underline dark:text-blue-300">Visit our Contact
				Us page</a>
		</div>
	</div>

@endsection