<div class="debug text-dark col-sm-12 row mx-0 mb-3">
    <div class="col-sm-5">
        <h5>Mention standalone debugging console</h5>
        <small class="d-block">Version: {{ app.build.code }}, Build {{ app.build.id }}</small>
        <div>Memory used: {{ debug.memoryUsed }} / {{ debug.memoryLimit }}</div>
        <div>Server: PHP <strong>{{ debug.phpVersion }}</strong>, MySQL <strong>{{ debug.mySQLVersion }}</strong></div>
        {% if not debug.serverInfo is null %}
            <div class="py-1">
                <small>{{ debug.serverInfo }}</small>
            </div>
        {% endif %}
        <div>Page loaded in <strong>{{ debug.calculatePageLoadTime }}</strong> seconds.</div>
    </div>
    <div class="col-sm-7 d-flex justify-content-lg-end pt-lg-0 pt-3">
        <textarea class="form-control w-75"
            rows="5">page: {{ debug.page.self.getPath() }}{{ '&#13;&#10;'|raw }}{% for key, item in debug.page.matchingPath %}{{ key }}: {{ item }}{{ '&#13;&#10;'|raw }}{% else %}404{% endfor %}</textarea>
    </div>
</div>