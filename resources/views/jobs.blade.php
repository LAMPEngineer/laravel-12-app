<x-layout>

    <x-slot:title>Jobs Page</x-slot:title>
    <x-slot:heading>Jobs</x-slot:heading>

    <h1> Jobs Listing </h1>

    <ul>
        @foreach($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">

            <li><strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.</li>
        </a>
        @endforeach
    </ul>
  
</x-layout>