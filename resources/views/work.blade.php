<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Work Experience') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">  
                <div id="id" style="font-size:30px">
                    Hello {{ Auth()->user()->name }} !
                </div>
                
                
                <div id="id" style="font-size:24px">
                    2015 - 2016 Student Arts And Crafts Competition 
                </div>
                <div id="id" style="font-size:20px">
                   project of computer software in national level 
                </div>
                <div id="id" style="font-size:16px">
                    <pre>
    Develop Club web application to solve the method register into the club problem in school 
                    </pre>
                </div>

                <div id="id" style="font-size:24px">
                    2019 - Present
Studying and Develop Software for Society

                </div>
                <div id="id">
                    <pre>
    Execute a project to build software and collaboration with team 
    Execute a project to build a web application of food delivery in Thammasat University
    Execute a project to build a web application of Photo platform and communication
    Execute a Machine Learning project to build software of Face detect and recognize on student card 
    Developing a mobile application of covid visualization (@COMAPOFFICIAL) 
    Developing a mobile application of Ministry of Commerce (moc.go.th) 
                    </pre>
                </div>
                
            </div>

            
        </div>
    </div>
</x-app-layout>
