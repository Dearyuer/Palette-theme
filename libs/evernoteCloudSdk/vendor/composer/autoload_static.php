<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4661a84be1ebe8d05547718c2656c6b7
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TijsVerkoyen\\CssToInlineStyles\\' => 31,
        ),
        'S' => 
        array (
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TijsVerkoyen\\CssToInlineStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/tijsverkoyen/css-to-inline-styles/src',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Thrift' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'E' => 
        array (
            'Evernote' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'EDAM\\Error\\EDAMErrorCode' => __DIR__ . '/../..' . '/src/EDAM/Error/Types.php',
        'EDAM\\Error\\EDAMNotFoundException' => __DIR__ . '/../..' . '/src/EDAM/Error/Types.php',
        'EDAM\\Error\\EDAMSystemException' => __DIR__ . '/../..' . '/src/EDAM/Error/Types.php',
        'EDAM\\Error\\EDAMUserException' => __DIR__ . '/../..' . '/src/EDAM/Error/Types.php',
        'EDAM\\Limits\\Constant' => __DIR__ . '/../..' . '/src/EDAM/Limits/Types.php',
        'EDAM\\NoteStore\\ClientUsageMetrics' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NoteCollectionCounts' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NoteEmailParameters' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NoteFilter' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NoteList' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NoteMetadata' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NoteStoreClient' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStoreIf' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_authenticateToSharedNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_authenticateToSharedNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_authenticateToSharedNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_authenticateToSharedNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_copyNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_copyNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createLinkedNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createLinkedNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createSearch_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createSearch_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createSharedNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createSharedNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createTag_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_createTag_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_deleteNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_deleteNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_emailNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_emailNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeInactiveNotes_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeInactiveNotes_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeLinkedNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeLinkedNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeNotes_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeNotes_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeSearch_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeSearch_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeSharedNotebooks_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeSharedNotebooks_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeTag_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_expungeTag_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNoteCounts_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNoteCounts_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNoteOffset_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNoteOffset_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNotesMetadata_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNotesMetadata_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNotes_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findNotes_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findRelated_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_findRelated_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getDefaultNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getDefaultNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getFilteredSyncChunk_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getFilteredSyncChunk_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getLinkedNotebookSyncChunk_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getLinkedNotebookSyncChunk_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getLinkedNotebookSyncState_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getLinkedNotebookSyncState_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteApplicationDataEntry_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteApplicationDataEntry_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteApplicationData_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteApplicationData_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteContent_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteContent_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteSearchText_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteSearchText_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteTagNames_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteTagNames_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteVersion_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNoteVersion_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getPublicNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getPublicNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceAlternateData_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceAlternateData_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceApplicationDataEntry_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceApplicationDataEntry_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceApplicationData_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceApplicationData_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceAttributes_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceAttributes_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceByHash_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceByHash_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceData_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceData_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceRecognition_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceRecognition_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceSearchText_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResourceSearchText_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResource_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getResource_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSearch_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSearch_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSharedNotebookByAuth_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSharedNotebookByAuth_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSyncChunk_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSyncChunk_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSyncStateWithMetrics_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSyncStateWithMetrics_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSyncState_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getSyncState_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getTag_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_getTag_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listLinkedNotebooks_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listLinkedNotebooks_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listNoteVersions_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listNoteVersions_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listNotebooks_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listNotebooks_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listSearches_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listSearches_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listSharedNotebooks_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listSharedNotebooks_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listTagsByNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listTagsByNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listTags_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_listTags_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_sendMessageToSharedNotebookMembers_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_sendMessageToSharedNotebookMembers_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_setNoteApplicationDataEntry_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_setNoteApplicationDataEntry_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_setResourceApplicationDataEntry_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_setResourceApplicationDataEntry_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_setSharedNotebookRecipientSettings_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_setSharedNotebookRecipientSettings_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_shareNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_shareNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_stopSharingNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_stopSharingNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_unsetNoteApplicationDataEntry_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_unsetNoteApplicationDataEntry_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_unsetResourceApplicationDataEntry_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_unsetResourceApplicationDataEntry_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_untagAll_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_untagAll_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateLinkedNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateLinkedNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateNote_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateNote_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateResource_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateResource_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateSearch_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateSearch_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateSharedNotebook_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateSharedNotebook_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateTag_args' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteStore_updateTag_result' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/NoteStore.php',
        'EDAM\\NoteStore\\NoteVersionId' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NotesMetadataList' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\NotesMetadataResultSpec' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\RelatedQuery' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\RelatedResult' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\RelatedResultSpec' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\SyncChunk' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\SyncChunkFilter' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\NoteStore\\SyncState' => __DIR__ . '/../..' . '/src/EDAM/NoteStore/Types.php',
        'EDAM\\Types\\Accounting' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\BusinessNotebook' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\BusinessUserInfo' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\BusinessUserRole' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Constant' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Data' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\LazyMap' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\LinkedNotebook' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Note' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\NoteAttributes' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\NoteSortOrder' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Notebook' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\NotebookDescriptor' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\NotebookRestrictions' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\PremiumInfo' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\PremiumOrderStatus' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\PrivilegeLevel' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Publishing' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\QueryFormat' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\ReminderEmailConfig' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Resource' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\ResourceAttributes' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SavedSearch' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SavedSearchScope' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SharedNotebook' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SharedNotebookInstanceRestrictions' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SharedNotebookPrivilegeLevel' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SharedNotebookRecipientSettings' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\SponsoredGroupRole' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\Tag' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\User' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\Types\\UserAttributes' => __DIR__ . '/../..' . '/src/EDAM/Types/Types.php',
        'EDAM\\UserStore\\AuthenticationResult' => __DIR__ . '/../..' . '/src/EDAM/UserStore/Types.php',
        'EDAM\\UserStore\\BootstrapInfo' => __DIR__ . '/../..' . '/src/EDAM/UserStore/Types.php',
        'EDAM\\UserStore\\BootstrapProfile' => __DIR__ . '/../..' . '/src/EDAM/UserStore/Types.php',
        'EDAM\\UserStore\\BootstrapSettings' => __DIR__ . '/../..' . '/src/EDAM/UserStore/Types.php',
        'EDAM\\UserStore\\Constant' => __DIR__ . '/../..' . '/src/EDAM/UserStore/Types.php',
        'EDAM\\UserStore\\PublicUserInfo' => __DIR__ . '/../..' . '/src/EDAM/UserStore/Types.php',
        'EDAM\\UserStore\\UserStoreClient' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStoreIf' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_authenticateLongSession_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_authenticateLongSession_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_authenticateToBusiness_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_authenticateToBusiness_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_authenticate_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_authenticate_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_checkVersion_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_checkVersion_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_completeTwoFactorAuthentication_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_completeTwoFactorAuthentication_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getBootstrapInfo_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getBootstrapInfo_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getNoteStoreUrl_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getNoteStoreUrl_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getPremiumInfo_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getPremiumInfo_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getPublicUserInfo_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getPublicUserInfo_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getUser_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_getUser_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_refreshAuthentication_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_refreshAuthentication_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_revokeLongSession_args' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
        'EDAM\\UserStore\\UserStore_revokeLongSession_result' => __DIR__ . '/../..' . '/src/EDAM/UserStore/UserStore.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4661a84be1ebe8d05547718c2656c6b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4661a84be1ebe8d05547718c2656c6b7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4661a84be1ebe8d05547718c2656c6b7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4661a84be1ebe8d05547718c2656c6b7::$classMap;

        }, null, ClassLoader::class);
    }
}
