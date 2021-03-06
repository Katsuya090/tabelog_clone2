<?php
class About extends AppModel {

   // 使用するビヘイビアの宣言
    public $actsAs = [
        // UploadプラグインのUploadBehaviorという意味
        'Upload.Upload' => [
            // photoというカラムに Uploadビヘイビアを使ってファイル名を登録する
            'photo' => [
                // デフォルトのカラム名 dir を photo_dir に変更
                'fields' => ['dir' => 'photo_dir'],
                'deleteOnUpdate' => true,
            ]
        ]
        ];




  public $validate = [
      'name' => [
          'rule' => ['notBlank']
      ],
      'addr' => [
          'rule' => ['notBlank']
      ],
      'year' => [
          'rule' => ['notBlank']
      ],
      'price' => [
          'rule' => ['notBlank']

      ],

      // 画像ファイルアップロードのバリデーション追加
        'photo' => [
            'UnderPhpSizeLimit' => [
                'allowEmpty' => true,
                'rule' => 'isUnderPhpSizeLimit',
                'message' => 'アップロード可能なファイルサイズを超えています'
            ],
            'BelowMaxSize' => [
                'rule' => ['isBelowMaxSize', 5242880],
                'message' => 'アップロード可能なファイルサイズを超えています'
            ],
            'CompletedUpload' => [
                'rule' => 'isCompletedUpload',
                'message' => 'ファイルが正常にアップロードされませんでした'
            ],
            'ValidMimeType' => [
                'rule' => ['isValidMimeType', ['image/jpeg', 'image/png'], false],
                'message' => 'ファイルが JPEG でも PNG でもありません'
            ],
            'ValidExtension' => [
                'rule' => ['isValidExtension', ['jpeg', 'jpg', 'png'], false],
                'message' => 'ファイルの拡張子が JPEG でも PNG でもありません'
            ]
        ]

  ];
}
