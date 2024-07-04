# Blade - Directives
## Blade Fundamentals
- Inside the curly braces the text is scaped to prevent HTML injection, for example
  - {{}} > uses htmlspecialchars() function behind the scenes
  - Use {{ !! text !! }} to cancel the escaping, but is not recommended
- The function `e($value, $doubleEncode = true)` is used to escape HTML entities
  - You can deactivate the double encoding by setting it to false on AppServiceProvider.php: `Blade::withoutDoubleEncoding()`
- Inside the curly braces you can use PHP functions. It uses echo by default

## Escaping for JS
- Using `@` to escape for JS
- Inside `@verbatim ... @endverbatim` directive, the text is escaped.

## If statements
- `@if`, `@else` and `@endif`
  - Example: `@if($condition) ... @else ... @endif`
- `@unless` - The opposite of `@if`. Returns true if the condition is false
- `@isset` and `@endisset`: Checks if a variable is set
- `@empty` and `@endempty`: Checks if a variable is empty, or not set

## Switch
- `@switch` and `@endswitch` + `@case`, `@break` and `@default` 
  - Example: `@switch($condition) ... @case ... @break ... @default ... @endswitch`

## Loops
- `@for` and `@endfor` - Ex: `@for($i = 0; $i < 10; $i++) ... @endfor`
- `@while` and `@endwhile` - Ex: `@while($i < 10) ... @endwhile`
- `@foreach` and `@endforeach` - Ex: `@foreach($array as $key => $value | $items as $item) ... @endforeach`
- `@forelse` - Ex: `@forelse($array as $key => $value | $items as $item) ... @empty ... @endforelse`
- You can use `@continue` and `@break` inside loops, as well
  - Besides the simple use, you can use with a condition: `@continue('condition') | @break('condition')`

### Loop object
- `{{$loop}}`: You can access the loop object inside the loop
  - `{{$loop->first}}`: true if it's the first iteration
  - `{{$loop->last}}`: true if it's the last iteration
  - `{{$loop->iteration}}`: The iteration number (1, 2, 3, 4, etc.)
  - `{{$loop->index}}`: The index of the current iteration (0, 1, 2, 3, etc.)
  - `{{$loop->remaining}}`: The number of remaining iterations
  - `{{$loop->even}}`: true if the current iteration is even
  - `{{$loop->odd}}`: true if the current iteration is odd
  - `{{$loop->parent}}`: The parent loop object. Ex: `{{$loop->parent->iteration}}`

## Conditional classes (HTML/CSS)
- `@class`: Adds a class to the element
  - Example: 
  ```php
  <div @class([
    'bg-gray-200' => $isDarkMode,
    'bg-white' => !$isDarkMode,
    'px-4' => $showPadding,
    'rounded' => $hasRoundedCorners
  ])>
      <!-- Content goes here -->
  </div>
  ```

## Conditional style (CSS)
- `@style`: Adds a style to the element
  - Example: 
  ```php
  <div @style([
    'color' => $color,
    'background-color' => $backgroundColor
  ])>
      <!-- Content goes here -->
  </div>
  ```

## Include
- `@include('template', ['data' => $extraData])`: Include a Blade template, including the data inside the base template

### Including with conditions
- `@includeIf('template', ['data' => $extraData])`: Include a Blade template if there is a template
- `@includeUnless($boolean, 'template', ['data' => $extraData])`: Include a Blade template if the condition is false
- `@includeWhen($boolean, 'template', ['data' => $extraData])`: Include a Blade template if the condition is true
- `@includeWhere($condition, 'template', ['data' => $extraData])`: Include a Blade template if the condition is true
- `@includeFirst(['template1', 'template2', 'template3'], ['data' => $extraData])`: Include the first template that exists

### Combining loops and includes
- `@each('view.name', $jobs, 'job', 'view.empty')` - Includes a view for each item in an array 
  - Is equivalent to `@foreach($jobs as $job) @include('view.name', ['job' => $job]) @endforeach`

## Extra
- `@php` and `@endphp`: Insert PHP code into the template