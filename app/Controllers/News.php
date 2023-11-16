<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\NewsModel;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        // $data['news'] = $model->getNews();
        // echo("<pre>");
        // print_r($data);
        // echo("</pre>");
        
        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];
        
        return view('templates/header', $data)
        . view('news/index')
        . view('templates/footer');
    }

    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: @' . $slug);
        }

        // echo("<pre>");
        // print_r($data);
        // echo("</pre>");

        $data['title'] = $data['news']['nombre'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');

    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        echo("<pre>");
        print_r($post);
        echo("</pre>");
        

        $model->save([
            'nombre' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'pagina_web'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/success')
            . view('templates/footer');
    }

}
         