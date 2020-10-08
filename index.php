<!DOCTYPE html>
<html lang="en">
<head>
<!--BOOTSTRAP-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Справочник базовых команд Linux</title>
</head>

<body>


    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
        <h1>Базовые команды Linux</h1>
        <p> С примерами и пояснениями</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <ul class="nav flex-column bg-light align-content-center sticky-top" >
                <li class="nav-item">Файловая система</li>
                <li class="nav-item">
                    <a class="nav-link" href="#pwd">pwd</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#cd">cd</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#ls">ls</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#mkdir">mkdir</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#rm">rm</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#touch">touch</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#mv">mv</a>
                </li>
            </ul>
        </div>

        <div class="overflow-auto col-sm-8 ">
            <h2>Файловая система</h2>
            <p><a name="pwd"></a>
                <h3>pwd</h3>
                Показывает текущую директорию, в которой на данный момент находится пользователь. <br>
                Англ. сокр. <i>print working directory</i>
                <div class="alert alert-info">
                root@MERLIN:/home/alex# pwd <br>
                    /home/alex
                </div>
            </p>

            <p><a name="cd"></a>
                <h3>cd</h3>
                Меняет текущую (рабочую) директорию. <br>
                Англ. сокр. <i>change directory</i> <br>
                В примере ниже мы перейдем в корневую директорию (обозн. "/")
                <div class="alert alert-info">
                    root@MERLIN:/home/alex# cd / <br>
                    root@MERLIN:/#
                </div>
                Обратите внимание на то, как изменилась строка приглашения (Prompt-строка)
            </p>

            <p><a name="ls"></a>
                <h3>ls</h3>
                Выводит содержимое директории.<br> Если не передать утилите конкретную директорию, выводит содержимое
                текущей.
                <div class="alert alert-info">
                    root@MERLIN:/# ls <br>
                    bin   dev  home  lib    lib64   lost+found  mnt  proc  run   snap  sys  usr <br>
                    boot  etc  init  lib32  libx32  media       opt  root  sbin  srv   tmp  var
                </div>
                Существует несколько дополнительных опций, которые могут оказаться полезными: <br>
                <b>-l</b> - Выводит дополнительную информацию о файлах, например, их размер (в блоках), дату создания и пр. <br>
                <b>-h</b> - Распространенная опция, которая приводит вывод в человекочитаемый формат. Так, например, теперь
                размер будет отображаться не в блоках, а в привычных нам килобайтах. <br>
                <b>-t</b> - Сортировка по времени создания
            </p>

            <p><a name ="mkdir"></a>
                <h3>mkdir</h3>
                Создает директорию с заданным именем в соответствии с указанным путем или внутри текущей.
                <div class="alert alert-info">
                    root@MERLIN:/# mkdir new_directory
                </div>
                Если необходимо создать внутри новой директории вложенные поддиректории, можно использовать опцию
            <b>-p</b>, чтобы сразу создать структуру. Например, <span class="badge badge-info">mkdir -p new_directory/new_subdirectory</span>
                    В противном случае возникнет ошибка.
            </p>

            <p><a name="rm"></a>
                <h3>rm</h3>
                Удаляет файл. Если необходимо удалить директорию, стоит воспользоваться опцией <b>-r</b> или аналогичной командой <span class="badge badge-info">rmdir</span>
                <div class="alert alert-info">
                    root@MERLIN:/# rm file
                </div>
                <b>-f</b> - позволяет удалить файл принудительно, без оповещения о возможных ошибках. <br>
                <small>Известная команда <span class="badge badge-warning"> rm -rf / </span> представляет собой своеобразную шутку,
                которую часто можно встретить на форумах. Она рекурсивно удаляет содержимое корневой директории (и, соответственно, все файлы, которые
                находятся ниже в иерархии файловой системы). Однако, современные дистрибутивы не позволят вам так издеваться над собой.</small>
            </p>

            <p><a name="touch"></a>
                <h3>touch</h3>
                В UNIX-системах традиционно используется для обновления времени изменения файла, но ее также можно использовать для создания пустых файлов.
                <div class="alert alert-info">
                    root@MERLIN:/# touch file
                </div>
                В дальнейшем, например, файл можно открыть в текстовом редакторе и внести изменения.
            </p>
            <p><a name="touch"></a>
                <h3>mv</h3>
                Перемещает файл или директорию.
                В качестве первого аргумента необходимо указать файл, который необходимо перенести, а в качестве второго - куда необходимо его переместить.
                Также данную утилиту можно использовать для переименования файлов, если "переносить" файл в ту же директорию, при этом
                необходимо указать новое имя файла.
                <br>
                Перемещение:
                <div class="alert alert-info">
                    root@MERLIN:/# mv file directory/
                </div>
                Переименование:
                <div class="alert alert-info">
                    root@MERLIN:/home# mv file new_file
                </div>
            </p>

        </div>

        <div class="col-sm-2"></div>

    </div>

</div>


</body>



</html>