<x-web.templates.base :title="$projectpage->title_seo" :description="$projectpage->description_seo">
  @if ($highlight)
  @php
    $image = isset($highlight->media[0]) ? asset('storage/'.$highlight->media[0]->path) : false;
  @endphp
  <x-web.templates.schedule :background="$image" :category="$category" :title="$highlight->title" :date="$highlight->date" :description="$highlight->introduction" :link="route('web.project', ['project' => $highlight->slug])" section-title="">
    @foreach ($projects as $project)
    @php
      $desc = $talk->show_date ? $talk->date : $talk->card_text;
      $projectImage = isset($project->media[0]) ? asset('storage/'.$project->media[0]->path) : false;
    @endphp
    <x-web.components.schedule-card :background="$projectImage" type="md" :title="$project->title" :content="$desc" :link="route('web.project', ['project' => $project->slug])" />
    @endforeach
  </x-web.templates.schedule>
  @endif
</x-web.templates.base>
