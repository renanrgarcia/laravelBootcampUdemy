# Blade - Components
## Master layout
- Create a master.blade.php at resources/views/layouts
- On master.blade.php put a `@yield('content')` tag to create a space for the content on child views
- Use on child views: `@extends('layouts.master')` to get the master layout and `@section('content') ... @endsection` to put the specific content in.

## Anonymous components
- Create a component at resources/views/Components
- Use on child views: <x-component-name> </x-component-name>
- To add content you can: <x-component-name content="content goes here"> ... </x-component-name> 
- Or you can add a content with a distinct variable:
  <x-component-name> <x-slot name="content"> Content goes here </x-slot>  </x-component-name>
  - You must add `{{ $content }}`in the master layout
- Another way: <x-component-name> Content goes here </x-component-name>
  - You must add `{{ $slot }}`in the master layout

## Class Based Components
- You can create a basic component: `php artisan make:component MyComponent --view`
  - It create a empty component at `resources/views/Components`
- To create a class based component: `php artisan make:component MyComponent`
  - It create a empty component at `resources/views/Components` and a class  at `app/View/Components`
- You can create properties in the class and use it on the views:
  - In the master component: `<x-MyComponent title="My title"> ... </x-MyComponent>`
  - In the child view: `{{ $title }}`

## Passing data to Class Based Components
- In the route: `Route::get('/', function () { $data = someData; return view('welcome', compact('data'));`  
  - In the view: `<x-MyComponent :data="$data"> ... </x-MyComponent>` > using the colon to pass the data
  - In the component: `<button data="{{ $data }}"> ... </button>`

## Passing data to Anonymous Components
- Static data:
  - In the view: `<x-component-name data="content"> ... </x-component-name>` 
  - In the component: `{{$data}}`
- Dynamic data:
  - In the view: 
  ```php
  @php $data = someData; @endphp
  <x-component-name :data="$data"> ... </x-component-name>
  ```
  - In the component: `{{$data}}`

## @props
- `@props(['data' => 'default value'])`: When creating a Blade component, you can use the @props directive at the top of the component file to declare the properties that the component expects. This is particularly useful for setting default values for properties and for making the component's interface more explicit.

## @aware
- `@aware(['data' => 'default value'])`: Used to access the properties of the parent component in the child component.

## Attributes 
- `$attributes`: Used to pass attributes to the component. This object contains some methods that allow you to access and manipulate the attributes.
  - `$attributes->class(['class1', 'class2'])`: Add classes to the component.
  - `$attributes->merge(['data' => 'value'])`: Merge attributes with the component.

## Component methods
- You can create a method in the class and use it on the views:
  - In the component class: 
  ```php
  public function myMethod($param1)
  {
    // ...
  }
  ```
  - In the view: 
  ```php
  {{ $myMethod($param1) }}
  ```
  