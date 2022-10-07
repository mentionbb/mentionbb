{% autoescape false %}
	{{ app.sub.renderer.bbcode.Parse(string.post.content)|raw }}
{% endautoescape %}