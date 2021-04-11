<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
        <style>body { padding-top: 40px; }</style>
    </head>

    <body>
        <div id="app" class="container">
            @include ('projects.list')

            <form method="POST" action="/projects">
                <div class="control">
                    <label for="name" class="label">Project Name:</label>
                    <input type="text" id="name" name="name" class="input">
                </div>

                <div class="control">
                    <label for="description" class="label">Project Description:</label>
                    <input type="text" id="description" name="description" class="input">
                </div>

                <div class="control">
                    <button class="button is-primary">Create</button>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
