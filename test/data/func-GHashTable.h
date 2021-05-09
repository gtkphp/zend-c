
GHashTable *g_hash_table_new (GHashFunc hash_func, GEqualFunc key_equal_func);

void g_key_file_set_string_list(GKeyFile *key_file, const gchar *group_name, const gchar *key, const gchar * const list[], gsize length);
