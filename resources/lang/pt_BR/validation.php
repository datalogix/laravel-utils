<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => 'O :attribute deve ser aceito quando :other for :value.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute só pode conter letras.',
    'alpha_dash' => 'O :attribute só pode conter letras, números e traços.',
    'alpha_num' => 'O :attribute só pode conter letras e números.',
    'array' => 'O :attribute deve ser uma matriz.',
    'before' => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve ser entre :min e :max.',
        'file' => 'O :attribute deve ser entre :min e :max kilobytes.',
        'string' => 'O :attribute deve ser entre :min e :max caracteres.',
        'array' => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O :attribute de confirmação não confere.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e o :other devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute possui um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'string' => 'O :attribute deve ser maior que :value caracteres.',
        'array' => 'O :attribute deve conter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'file' => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O :attribute deve conter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um número inteiro.',
    'ip' => 'O :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'string' => 'O :attribute deve ser menor que :value caracteres.',
        'array' => 'O :attribute deve conter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'file' => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser menor ou igual a :value caracteres.',
        'array' => 'O :attribute não deve conter mais que :value itens.',
    ],
    'max' => [
        'numeric' => 'O :attribute não pode ser superior a :max.',
        'file' => 'O :attribute não pode ser superior a :max kilobytes.',
        'string' => 'O :attribute não pode ser superior a :max caracteres.',
        'array' => 'O :attribute não pode ter mais do que :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file' => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
        'array' => 'O :attribute deve ter pelo menos :min itens.',
    ],

    'same' => 'The :attribute and :other must match.',

    'multiple_of' => 'O :attribute deve ser um múltiplo de :value',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O :attribute tem um formato inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O :attribute tem um formato inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other for :value.',
    'required_unless' => 'O campo :attribute é obrigatório exceto quando :other for :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido quando :other for :values.',
    'prohibits' => 'O campo :attribute é proibido quando :other está presente.',
    'same' => 'O :attribute e :other devem corresponder.',
    'size' => [
        'numeric' => 'O :attribute deve ser :size.',
        'file' => 'O :attribute deve ser :size kilobytes.',
        'string' => 'O :attribute deve ser :size caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes valores: :values',
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique' => 'O :attribute já está sendo utilizado.',
    'uploaded' => 'O: attribute falhou ao carregar.',
    'url' => 'O :attribute deve ser uma URL válida.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'accept' => 'aceite os termos e condições',
        'Action' => 'Ação',
        'action' => 'Ação',
        'action_id' => 'Ação',
        'Actions' => 'Ações',
        'actions' => 'Ações',
        'Address' => 'Endereço',
        'address' => 'Endereço',
        'address_id' => 'Endereço',
        'Adresses' => 'Endereços',
        'adresses' => 'Endereços',
        'Administrator' => 'Administrator',
        'administrator' => 'Administrator',
        'administrator_id' => 'Administrator',
        'Administrators' => 'Administratores',
        'administrators' => 'Administratores',
        'Age' => 'Idade',
        'age' => 'Idade',
        'age_id' => 'Idade',
        'Ages' => 'Idades',
        'ages' => 'Idades',
        'Activity' => 'Atividade',
        'activity' => 'Atividade',
        'activity_id' => 'Atividade',
        'Activities' => 'Atividade',
        'activities' => 'Atividades',
        'Article' => 'Artigo',
        'article' => 'Artigo',
        'article_id' => 'Artigo',
        'Articles' => 'Artigos',
        'articles' => 'Artigos',
        'Back' => 'Voltar',
        'back' => 'Voltar',
        'back_id' => 'Voltar',
        'Banner' => 'Banner',
        'banner' => 'Banner',
        'banner_id' => 'Banner',
        'Banners' => 'Banners',
        'banners' => 'Banners',
        'Bet' => 'Aposta',
        'bet' => 'Aposta',
        'bet_id' => 'Aposta',
        'Bets' => 'Apostas',
        'bets' => 'Apostas',
        'Body' => 'Conteúdo',
        'body' => 'Conteúdo',
        'body_id' => 'Conteúdo',
        'Bodys' => 'Conteúdos',
        'bodys' => 'Conteúdos',
        'Book' => 'Livro',
        'book' => 'Livro',
        'book_id' => 'Livro',
        'Books' => 'Livros',
        'books' => 'Livros',
        'Cancel' => 'Cancelar',
        'cancel' => 'Cancelar',
        'cancel_id' => 'Cancelar',
        'Category' => 'Categoria',
        'category' => 'Categoria',
        'category_id' => 'Categoria',
        'Categories' => 'Categorias',
        'categories' => 'Categorias',
        'Cell' => 'Célula',
        'cell' => 'Célula',
        'cell_id' => 'Célula',
        'Cells' => 'Células',
        'cells' => 'Células',
        'Cellphone' => 'Telefone celular',
        'cellphone' => 'Telefone celular',
        'cellphone_id' => 'Telefone celular',
        'cell_phone' => 'Telefone celular',
        'cell_phone_id' => 'Telefone celular',
        'Cell phone' => 'Telefone celular',
        'Cell Phone' => 'Telefone celular',
        'Changepassword' => 'Alterar senha',
        'changepassword' => 'Alterar senha',
        'changepassword_id' => 'Alterar senha',
        'change_password' => 'Alterar senha',
        'change_password_id' => 'Alterar senha',
        'Change password' => 'Alterar senha',
        'Change Password' => 'Alterar senha',
        'City' => 'Cidade',
        'city' => 'Cidade',
        'city_id' => 'Cidade',
        'Cities' => 'Cidades',
        'cities' => 'Cidades',
        'Cnpj' => 'Cnpj',
        'cnpj' => 'Cnpj',
        'cnpj_id' => 'Cnpj',
        'Code' => 'Código',
        'code' => 'Código',
        'code_id' => 'Código',
        'Codes' => 'Códigos',
        'codes' => 'Códigos',
        'Color' => 'Cor',
        'color' => 'Cor',
        'color_id' => 'Cor',
        'Comment' => 'Comentário',
        'comment' => 'Comentário',
        'comment_id' => 'Comentário',
        'Comments' => 'Comentários',
        'comments' => 'Comentários',
        'Company' => 'Empresa',
        'company' => 'Empresa',
        'company_id' => 'Empresa',
        'Companies' => 'Empresas',
        'companies' => 'Empresas',
        'Complement' => 'Complemento',
        'complement' => 'Complemento',
        'complement_id' => 'Complemento',
        'Complements' => 'Complementos',
        'complements' => 'Complementos',
        'Confirm' => 'Confirmar',
        'confirm' => 'Confirmar',
        'confirm_id' => 'Confirmar',
        'Confirm Password' => 'Confirmação de senha',
        'confirm password' => 'Confirmação de senha',
        'Confirm password' => 'Confirmação de senha',
        'confirm_password' => 'Confirmação de senha',
        'confirm_password_id' => 'Confirmação de senha',
        'Contact' => 'Contato',
        'contact' => 'Contato',
        'contact_id' => 'Contato',
        'Contacts' => 'Contatos',
        'contacts' => 'Contatos',
        'Contract' => 'Contrato',
        'contract' => 'Contrato',
        'contract_id' => 'Contrato',
        'Contracts' => 'Contratos',
        'contracts' => 'Contratos',
        'Corporatename' => 'Razão social',
        'corporatename' => 'Razão social',
        'corporatename_id' => 'Razão social',
        'corporate_name' => 'Razão social',
        'corporate_name_id' => 'Razão social',
        'Corporate name' => 'Razão social',
        'Corporate Name' => 'Razão social',
        'Country' => 'País',
        'country' => 'País',
        'country_id' => 'País',
        'Countries' => 'Países',
        'countries' => 'Países',
        'Cpf' => 'Cpf',
        'cpf' => 'Cpf',
        'cpf_id' => 'Cpf',
        'Create' => 'Criar',
        'create' => 'Criar',
        'create_id' => 'Criar',
        'Created_at' => 'Data de criação',
        'createdat' => 'Data de criação',
        'created_at' => 'Data de criação',
        'Created at' => 'Data de criação',
        'Created At' => 'Data de criação',
        'Date' => 'Data',
        'date' => 'Data',
        'date_id' => 'Data',
        'Dates' => 'Datas',
        'dates' => 'Datas',
        'Datetime' => 'Data e hora',
        'datetime' => 'Data e hora',
        'datetime_id' => 'Data e hora',
        'date_time' => 'Data e hora',
        'date_time_id' => 'Data e hora',
        'Date time' => 'Data e hora',
        'Date Time' => 'Data e hora',
        'Day' => 'Dia',
        'day' => 'Dia',
        'day_id' => 'Dia',
        'Days' => 'Dias',
        'days' => 'Dias',
        'Delete' => 'Deletar',
        'delete' => 'Deletar',
        'delete_id' => 'Deletar',
        'Department' => 'Departamento',
        'department' => 'Departamento',
        'department_id' => 'Departamento',
        'Departments' => 'Departamentos',
        'departments' => 'Departamentos',
        'Description' => 'Descrição',
        'description' => 'Descrição',
        'description_id' => 'Descrição',
        'Descriptions' => 'Descrições',
        'descriptions' => 'Descrições',
        'Destroy' => 'Remover',
        'destroy' => 'Remover',
        'destroy_id' => 'Remover',
        'Document' => 'Documento',
        'document' => 'Documento',
        'document_id' => 'Documento',
        'Documents' => 'Documentos',
        'documents' => 'Documentos',
        'Donation' => 'Doação',
        'donation' => 'Doação',
        'donation_id' => 'Doação',
        'Donations' => 'Doações',
        'donations' => 'Doações',
        'Download' => 'Download',
        'download' => 'Download',
        'download_id' => 'Download',
        'Edit' => 'Editar',
        'edit' => 'Editar',
        'edit_id' => 'Editar',
        'Enter' => 'Entrar',
        'enter' => 'Entrar',
        'enter_id' => 'Entrar',
        'email' => 'E-mail',
        'Email' => 'E-mail',
        'email_id' => 'E-mail',
        'E-Mail Address' => 'E-mail',
        'Excerpt' => 'Resumo',
        'excerpt' => 'Resumo',
        'excerpt_id' => 'Resumo',
        'Excerpts' => 'Resumos',
        'excerpts' => 'Resumos',
        'Export' => 'Export',
        'export' => 'Export',
        'export_id' => 'Export',
        'Exports' => 'Exportações',
        'exports' => 'Exportações',
        'Fantasy' => 'Fantasia',
        'fantasy' => 'Fantasia',
        'fantasy_id' => 'Fantasia',
        'Fantasyname' => 'Nome fantasia',
        'fantasyname' => 'Nome fantasia',
        'fantasyname_id' => 'Nome fantasia',
        'fantasy_name' => 'Nome fantasia',
        'fantasy_name_id' => 'Nome fantasia',
        'Fantasy name' => 'Nome fantasia',
        'Fantasy Name' => 'Nome fantasia',
        'File' => 'Arquivo',
        'file' => 'Arquivo',
        'file_id' => 'Arquivo',
        'Files' => 'Arquivos',
        'files' => 'Arquivos',
        'First_name' => 'Primeiro nome',
        'firstname' => 'Primeiro nome',
        'firstname_id' => 'Primeiro nome',
        'first_name' => 'Primeiro nome',
        'first_name_id' => 'Primeiro nome',
        'First name' => 'Primeiro nome',
        'First Name' => 'Primeiro nome',
        'Game' => 'Jogo',
        'game' => 'Jogo',
        'game_id' => 'Jogo',
        'Games' => 'Jogos',
        'games' => 'Jogos',
        'Gender' => 'Gênero',
        'gender' => 'Gênero',
        'gender_id' => 'Gênero',
        'Home' => 'Principal',
        'home' => 'Principal',
        'home_id' => 'Principal',
        'Hour' => 'Hora',
        'hour' => 'Hora',
        'hour_id' => 'Hora',
        'Hours' => 'Horas',
        'hours' => 'Horas',
        'Image' => 'Imagem',
        'image' => 'Imagem',
        'image_id' => 'Imagem',
        'Images' => 'Imagens',
        'images' => 'Imagens',
        'Import' => 'Importar',
        'import' => 'Importar',
        'import_id' => 'Importar',
        'Imports' => 'Importações',
        'imports' => 'Importações',
        'Last_name' => 'Sobrenome',
        'lastname' => 'Sobrenome',
        'lastname_id' => 'Sobrenome',
        'last_name' => 'Sobrenome',
        'last_name_id' => 'Sobrenome',
        'Last name' => 'Sobrenome',
        'Last Name' => 'Sobrenome',
        'Login' => 'Entrar',
        'login' => 'Entrar',
        'login_id' => 'Entrar',
        'Logo' => 'Logo',
        'logo' => 'Logo',
        'logo_id' => 'Logo',
        'Logos' => 'Logos',
        'logos' => 'Logos',
        'Logout' => 'Sair',
        'logout' => 'Sair',
        'logout_id' => 'Sair',
        'Mayor' => 'Prefeito',
        'mayor' => 'Prefeito',
        'mayor_id' => 'Prefeito',
        'Mayors' => 'Prefeitos',
        'mayors' => 'Prefeitos',
        'Media' => 'Mídia',
        'media' => 'Mídia',
        'media_id' => 'Mídia',
        'Medias' => 'Mídias',
        'medias' => 'Mídias',
        'Message' => 'Mensagem',
        'message' => 'Mensagem',
        'message_id' => 'Mensagem',
        'Messages' => 'Mensagens',
        'messages' => 'Mensagens',
        'Minute' => 'Minuto',
        'minute' => 'Minuto',
        'minute_id' => 'Minuto',
        'Minutes' => 'Minutos',
        'minutes' => 'Minutos',
        'Mobile' => 'Celular',
        'mobile' => 'Celular',
        'mobile_id' => 'Celular',
        'Mobiles' => 'Celulares',
        'mobiles' => 'Celulares',
        'Month' => 'Mês',
        'month' => 'Mês',
        'month_id' => 'Mês',
        'Months' => 'Meses',
        'months' => 'Meses',
        'Name' => 'Nome',
        'name' => 'Nome',
        'name_id' => 'Nome',
        'Neighborhood' => 'Bairro',
        'neighborhood' => 'Bairro',
        'neighborhood_id' => 'Bairro',
        'Neighborhoods' => 'Bairros',
        'neighborhoods' => 'Bairros',
        'New' => 'Novo',
        'new' => 'Novo',
        'new_id' => 'Novo',
        'News' => 'Notícia',
        'news' => 'Notícia',
        'news_id' => 'Notícia',
        'Number' => 'Número',
        'number' => 'Número',
        'number_id' => 'Número',
        'Numbers' => 'Números',
        'numbers' => 'Números',
        'Option' => 'Opção',
        'option' => 'Opção',
        'option_id' => 'Opção',
        'Options' => 'Opções',
        'options' => 'Opções',
        'Order' => 'Pedido',
        'order' => 'Pedido',
        'order_id' => 'Pedido',
        'Orders' => 'Pedidos',
        'orders' => 'Pedidos',
        'Ownser' => 'Dono',
        'ownser' => 'Dono',
        'ownser_id' => 'Dono',
        'Ownsers' => 'Donos',
        'ownsers' => 'Donos',
        'Page' => 'Página',
        'page' => 'Página',
        'page_id' => 'Página',
        'Pages' => 'Páginas',
        'pages' => 'Páginas',
        'Password' => 'Senha',
        'password' => 'Senha',
        'password_id' => 'Senha',
        'Password_confirmation' => 'Confirmação da senha',
        'passwordconfirmation' => 'Confirmação da senha',
        'passwordconfirmation_id' => 'Confirmação da senha',
        'password_confirmation' => 'Confirmação da senha',
        'password_confirmation_id' => 'Confirmação da senha',
        'Password confirmation' => 'Confirmação da senha',
        'Password Confirmation' => 'Confirmação da senha',
        'Phone' => 'Telefone',
        'phone' => 'Telefone',
        'phone_id' => 'Telefone',
        'Phones' => 'Telefones',
        'phones' => 'Telefones',
        'Photo' => 'Foto',
        'photo' => 'Foto',
        'photo_id' => 'Foto',
        'Photos' => 'Fotos',
        'photos' => 'Fotos',
        'Place' => 'Local',
        'place' => 'Local',
        'place_id' => 'Local',
        'Places' => 'Locais',
        'places' => 'Locais',
        'Postal_code' => 'Cep',
        'postalcode' => 'Cep',
        'postalcode_id' => 'Cep',
        'postal_code' => 'Cep',
        'postal_code_id' => 'Cep',
        'Postal code' => 'Cep',
        'Postal Code' => 'Cep',
        'Product' => 'Produto',
        'product' => 'Produto',
        'product_id' => 'Produto',
        'Products' => 'Produtos',
        'products' => 'Produtos',
        'Profile' => 'Perfil',
        'profile' => 'Perfil',
        'profile_id' => 'Perfil',
        'Question' => 'Pergunta',
        'question' => 'Pergunta',
        'question_id' => 'Pergunta',
        'Questions' => 'Perguntas',
        'questions' => 'Perguntas',
        'Register' => 'Registre-se',
        'register' => 'Registre-se',
        'register_id' => 'Registre-se',
        'Report' => 'Relatório',
        'report' => 'Relatório',
        'report_id' => 'Relatório',
        'Reports' => 'Relatórios',
        'reports' => 'Relatórios',
        'Representative' => 'Representante',
        'representative' => 'Representante',
        'representative_id' => 'Representante',
        'Representatives' => 'Representantes',
        'representatives' => 'Representantes',
        'Responsible' => 'Pesponsável',
        'responsible' => 'Pesponsável',
        'responsible_id' => 'Pesponsável',
        'Responsibles' => 'Responsáveis',
        'responsibles' => 'Responsáveis',
        'Save' => 'Salvar',
        'save' => 'Salvar',
        'save_id' => 'Salvar',
        'School' => 'Escola',
        'school' => 'Escola',
        'school_id' => 'Escola',
        'Schools' => 'Escolas',
        'schools' => 'Escolas',
        'Search' => 'Buscar',
        'search' => 'Buscar',
        'search_id' => 'Buscar',
        'Second' => 'Segundo',
        'second' => 'Segundo',
        'second_id' => 'Segundo',
        'Seconds' => 'Segundos',
        'seconds' => 'Segundos',
        'Send' => 'Enviar',
        'send' => 'Enviar',
        'send_id' => 'Enviar',
        'Sex' => 'Sexo',
        'sex' => 'Sexo',
        'sex_id' => 'Sexo',
        'Shift' => 'Escala',
        'shift' => 'Escala',
        'shift_id' => 'Escala',
        'Shifts' => 'Escalas',
        'shifts' => 'Escalas',
        'Show' => 'Visualizar',
        'show' => 'Visualizar',
        'show_id' => 'Visualizar',
        'State' => 'Estado',
        'state' => 'Estado',
        'state_id' => 'Estado',
        'States' => 'Estados',
        'states' => 'Estados',
        'State_registration' => 'Inscrição estadual',
        'stateregistration' => 'Inscrição estadual',
        'stateregistration_id' => 'Inscrição estadual',
        'state_registration' => 'Inscrição estadual',
        'state_registration_id' => 'Inscrição estadual',
        'State registration' => 'Inscrição estadual',
        'State Registration' => 'Inscrição estadual',
        'Street' => 'Rua',
        'street' => 'Rua',
        'street_id' => 'Rua',
        'Streets' => 'Ruas',
        'streets' => 'Ruas',
        'Student' => 'Aluno',
        'student' => 'Aluno',
        'student_id' => 'Aluno',
        'Students' => 'Alunos',
        'students' => 'Alunos',
        'Subject' => 'Assunto',
        'subject' => 'Assunto',
        'subject_id' => 'Assunto',
        'Subjects' => 'Assuntos',
        'subjects' => 'Assuntos',
        'Subscription' => 'Inscrição',
        'subscription' => 'Inscrição',
        'subscription_id' => 'Inscrição',
        'Subscriptions' => 'Inscrições',
        'subscriptions' => 'Inscrições',
        'Subtitle' => 'Subtítulo',
        'subtitle' => 'Subtítulo',
        'subtitle_id' => 'Subtítulo',
        'Subtitles' => 'Subtítulos',
        'subtitles' => 'Subtítulos',
        'Supervisor' => 'Supervisor',
        'supervisor' => 'Supervisor',
        'supervisor_id' => 'Supervisor',
        'Supervisors' => 'Supervisores',
        'supervisors' => 'Supervisores',
        'Teacher' => 'Professor',
        'teacher' => 'Professor',
        'teacher_id' => 'Professor',
        'Teachers' => 'Professores',
        'teachers' => 'Professores',
        'Text' => 'Texto',
        'text' => 'Texto',
        'text_id' => 'Texto',
        'Texts' => 'Textos',
        'texts' => 'Textos',
        'Time' => 'Tempo',
        'time' => 'Tempo',
        'time_id' => 'Tempo',
        'Times' => 'Vezes',
        'times' => 'Vezes',
        'Title' => 'Título',
        'title' => 'Título',
        'title_id' => 'Título',
        'Titles' => 'Títulos',
        'titles' => 'Títulos',
        'Type' => 'Tipo',
        'type' => 'Tipo',
        'type_id' => 'Tipo',
        'Types' => 'Tipos',
        'types' => 'Tipos',
        'Update' => 'Atualizar',
        'update' => 'Atualizar',
        'update_id' => 'Atualizar',
        'Updated_at' => 'Data de atualização',
        'updatedat' => 'Data de atualização',
        'updatedat_id' => 'Data de atualização',
        'updated_at' => 'Data de atualização',
        'updated_at_id' => 'Data de atualização',
        'Updated at' => 'Data de atualização',
        'Updated At' => 'Data de atualização',
        'Url' => 'Url',
        'url' => 'Url',
        'url_id' => 'Url',
        'Urls' => 'Urls',
        'urls' => 'Urls',
        'User' => 'Usuário',
        'user' => 'Usuário',
        'user_id' => 'Usuário',
        'Users' => 'Usuários',
        'users' => 'Usuários',
        'User_name' => 'Nome do usuário',
        'username' => 'Nome do usuário',
        'username_id' => 'Nome do usuário',
        'user_name' => 'Nome do usuário',
        'user_name_id' => 'Nome do usuário',
        'User name' => 'Nome do usuário',
        'User Name' => 'Nome do usuário',
        'Value' => 'Valor',
        'value' => 'Valor',
        'value_id' => 'Valor',
        'Values' => 'Valores',
        'values' => 'Valores',
        'Video' => 'Vídeo',
        'video' => 'Vídeo',
        'video_id' => 'Vídeo',
        'Videos' => 'Vídeos',
        'videos' => 'Vídeos',
        'Year' => 'Ano',
        'year' => 'Ano',
        'year_id' => 'Ano',
        'Years' => 'Anos',
        'years' => 'Anos',
        'Zip_code' => 'Cep',
        'zipcode' => 'Cep',
        'zipcode_id' => 'Cep',
        'zip_code' => 'Cep',
        'zip_code_id' => 'Cep',
        'Zip code' => 'Cep',
        'Zip Code' => 'Cep',
    ],

];
