{% if auth  %}
    <p>Hello, {{ auth.getNameOrUser() }}</p>
{% endif %}
<ul>


  {% if auth %}
        <li><a href="#">MyProfile</a></li>
        <li><a href="{{ urlFor('logout') }}">Log out</a></li>
  {% else %}
    <li><a href="{{ urlFor('home') }}">Home</a></li>
    <li><a href="{{ urlFor('register') }}">Register</a></li>
    <li><a href="{{ urlFor('login') }}">Login</a></li>
  {% endif %}



</ul>
