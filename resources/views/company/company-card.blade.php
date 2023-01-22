<a class="max-w-sm py-6 w-full lg:max-w-full lg:flex" href="{{route('index-job',['company'=>$company])}}">
    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">

      <div class="sm:flex items-center">
        <img class="w-20 h-20 rounded-full mr-4" src="{{URL::asset($company->photo)}}" alt="Avatar of Jonathan Reinink">
        <div class="text-sm">
          <p class="text-gray-900 leading-none">{{$company->name}}</p>
          <p class="text-gray-600">{{$company->info}}</p>
        </div>
      </div>
    </div>
</a>
