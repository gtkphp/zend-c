typedef struct _GHashTable GHashTable;
typedef unsigned int    guint;
typedef int    gint;
typedef gint   gboolean;
typedef const void *gconstpointer;
typedef guint           (*GHashFunc)            (gconstpointer  key);
typedef gboolean        (*GEqualFunc)           (gconstpointer  a,
                                                 gconstpointer  b);
