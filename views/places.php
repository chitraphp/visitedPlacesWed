<html>
<head>
    <title>Visited Places</title>
</head>
<body>
    <h1>Visited Places<h1>
        {% if visited_places is not empty %}
        <p>Here are the Places We visited</p>

    <ul>
        {% for places in visited_places %}
        <li>{% places.place_name %} </li>
        <li>{% places.country %} </li>
        {% endfor %}
    </ul>
    {% endif %}

        <form action='/tripInfo' method ='post'>
            <label for ='place'>Name of the place</label>
            <label for ='country'>Name of the country</label>
            <input id='place' name='place' type='text'>
            <input id='country' name='country' type='text'>

            <button type ='submit'> ADD </button>
        </form>
