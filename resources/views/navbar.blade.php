<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<!--  The include directive in Laravel allows you to include a Blade view from within another Blade view. Let's demonstrate this with an example that includes a Bootstrap navbar.

extends: In Laravel's Blade templating engine, extends is used to specify that a Blade view (child view) extends a layout (parent view). It allows you to define a common layout once and reuse it across multiple views. The child view can override specific sections of the parent layout using section and endsection directives. This is useful for maintaining consistency across your application's UI, as you can define the overall structure in one place and focus on the content of each view separately.

include: On the other hand, include is used to include the contents of another Blade view within the current Blade view. It's like copy-pasting the content of one Blade file into another. This is useful when you have reusable components or sections that you want to include in multiple views without duplicating the code. Unlike extends, include doesn't establish a parent-child relationship between views; it simply inserts the content of one view into another. -->