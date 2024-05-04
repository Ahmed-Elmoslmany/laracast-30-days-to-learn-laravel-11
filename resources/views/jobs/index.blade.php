<x-layout>
    <x-slot name="heading">
        Job
    </x-slot>

<ul class="space-y-4">
    @foreach($jobs as $job)
        <a href="jobs/{{$job["id"]}}" class=" block px-4 py-6 border border-gray=200 rounded-lg" >
        <div class="font-bold text-sky-600">{{$job->employer->company_name}}</div>
        <div><strong>{{$job["title"]}}</strong>: his salary is {{$job["salary"]}} per year</div>
    @endforeach
        </a>
        <div>
            {{$jobs->links()}}
        </div>
</ul>
</x-layout>
