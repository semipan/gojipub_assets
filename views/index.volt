{{ partial("partials/main_nav", ['title': '资源']) }}
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">文件名</th>
            <th scope="col">大小</th>
            <th scope="col">创建时间</th>
            <th scope="col">操作</th>
        </tr>
    </thead>
    <tbody>
        {% set rows = assets(['func': 'getRows']) %}
        {% for k,v in rows %}
        <tr>
            <td><input type="checkbox" id="exampleCheck1"> </td>
            <td><i class="fa fa-file-o" aria-hidden="true"></i> {{ v['name'] }}</td>
            <td>{{ v['size'] }}</td>
            <td>{{ date("Y-m-d H:i:s", v['filemtime']) }}</td>
            <td><a href="/plugins/assets?action=delete&file={{ v['name'] }}">删除</a></td>
        </tr>
        {% endfor %}
    </tbody>
</table>