<?php



Route::get('/',[
    'uses'   => 'IndexController@index',
    'as'    => '/'
]);
Route::get('index',[
    'uses'   => 'IndexController@login',
    'as'    => 'login-user'
]);



Route::get('profile',[
    'uses'   => 'ClintController@profile',
    'as'    => 'profile'
]);









//contact us



Route::post('contact-us',[
    'uses'   => 'ContactController@getMsg',
    'as'    => 'contact-us'
]);
Route::get('information-seeker',[
    'uses'   => 'ContactController@informationSeeker',
    'as'    => 'information-seeker'
]);





//clint

    Route::post('logout-clint',[
        'uses'   => 'ClintController@logoutClint',
        'as'    => 'logout-clint'
    ]);




    Route::post('new-clint',[
        'uses'   => 'ClintController@newClint',
        'as'    => 'new-clint'
    ]);



    Route::post('login-clint',[
        'uses'   => 'ClintController@loginClint',
        'as'    => 'login-clint'
    ]);

    Route::get('buy-credit',[
        'uses'   => 'CreditController@buyCredit',
        'as'    => 'buy-credit'
    ]);
    Route::post('credit-request',[
        'uses'   => 'CreditController@creditRequest',
        'as'    => 'credit-request'
    ]);

    Route::get('sell-credit',[
        'uses'   => 'CreditController@sellCredit',
        'as'    => 'sell-credit'
    ]);

    Route::post('cash-request',[
        'uses'   => 'CreditController@cashRequest',
        'as'    => 'cash-request'
    ]);

    Route::get('ask-question',[
        'uses'   => 'QuestionController@askQuestion',
        'as'    => 'ask-question'
    ]);


    Route::post('question',[
        'uses'   => 'QuestionController@question',
        'as'    => 'question'
    ]);

    Route::get('session-student',[
        'uses'   => 'QuestionController@sessionQuestion',
        'as'    => 'session-student'
    ]);

    Route::get('question-list',[
        'uses'   => 'TeacherController@questionList',
        'as'    => 'question-list'
    ]);
    Route::post('start-bid',[
        'uses'   => 'TeacherController@startBid',
        'as'    => 'start-bid'
    ]);

    Route::post('accept-bit',[
        'uses'   => 'QuestionController@acceptBit',
        'as'    => 'accept-bit'
    ]);
    Route::get('accept-bit',[
        'uses'   => 'QuestionController@acceptBit',
        'as'    => 'accept-bit'
    ]);
    Route::get('session-teacher',[
        'uses'   => 'TeacherController@sessionTeacher',
        'as'    => 'session-teacher'
    ]);


    Route::post('student-done',[
            'uses'   => 'QuestionController@studentDone',
            'as'    => 'student-done'
     ]);
    Route::post('teacher-done',[
            'uses'   => 'TeacherController@teacherDone',
            'as'    => 'teacher-done'
     ]);





























//admin






Route::get('add-subject',[
    'uses'   => 'SubjectController@addSubject',
    'as'    => 'add-subject'
]);
Route::get('view-subject',[
    'uses'   => 'SubjectController@viewSubject',
    'as'    => 'view-subject'
]);
Route::post('new-subject',[
    'uses'   => 'SubjectController@newSubject',
    'as'    => 'new-subject'
]);
Route::get('edit-subject{id}',[
    'uses'   => 'SubjectController@editSubject',
    'as'    => 'edit-subject'
]);
Route::post('update-subject',[
    'uses'   => 'SubjectController@updateSubject',
    'as'    => 'update-subject'
]);
Route::get('delete-subject{id}',[
    'uses'   => 'SubjectController@deleteSubject',
    'as'    => 'delete-subject'
]);



Route::get('add-department',[
    'uses'   => 'DepartmentController@addDepartment',
    'as'    => 'add-department'
]);
Route::get('view-department',[
    'uses'   => 'DepartmentController@viewDepartment',
    'as'    => 'view-department'
]);
Route::post('new-department',[
    'uses'   => 'DepartmentController@newDepartment',
    'as'    => 'new-department'
]);
Route::get('edit-department{id}',[
    'uses'   => 'DepartmentController@editDepartment',
    'as'    => 'edit-department'
]);
Route::post('update-department',[
    'uses'   => 'DepartmentController@updateDepartment',
    'as'    => 'update-department'
]);
Route::get('delete-department{id}',[
    'uses'   => 'DepartmentController@deleteDepartment',
    'as'    => 'delete-department'
]);

Route::get('clint-request',[
    'uses'   => 'ClintController@clintRequest',
    'as'    => 'clint-request'
]);
Route::get('clint-list',[
    'uses'   => 'ClintController@clintList',
    'as'    => 'clint-list'
]);
Route::get('clint-details{id}',[
    'uses'   => 'ClintController@clintDetails',
    'as'    => 'clint-details'
]);
Route::post('update-clint',[
    'uses'   => 'ClintController@clintUpdate',
    'as'    => 'update-clint'
]);
Route::get('confirm-credit',[
    'uses'   => 'CreditController@confirmCredit',
    'as'    => 'confirm-credit'
]);

Route::post('add-credit',[
    'uses'   => 'CreditController@addCredit',
    'as'    => 'add-credit'
]);

Route::get('confirm-cash',[
    'uses'   => 'CreditController@confirmCash',
    'as'    => 'confirm-cash'
]);

Route::post('sub-cash',[
    'uses'   => 'CreditController@subCash',
    'as'    => 'sub-cash'
]);







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
