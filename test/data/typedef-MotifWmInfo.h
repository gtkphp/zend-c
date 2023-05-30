/*
OK : Revoir l'export des header
typedef struct _GdkAtom            GdkAtom;

struct _GdkAtom {
  int foo;
};
*/

/*
Error
typedef struct _GdkAtom            GdkAtom;

typedef struct _GdkAtom {
  int foo;
} GdkAtom;
*/

/*
Error
typedef enum _AtkCoordType AtkCoordType;

typedef enum _AtkCoordType {
  ATK_XY_SCREEN,
  ATK_XY_WINDOW
} AtkCoordType;
*/



/*
typedef struct _GdkAtom            *GdkAtom;
typedef enum __GdkX11Window      GdkX11Window;
typedef struct __GdkX11VisualClass GdkX11VisualClass;
typedef union _Foo Foo;

typedef enum _cairo_pattern_type {
    CAIRO_PATTERN_TYPE_SOLID,
    CAIRO_PATTERN_TYPE_SURFACE,
    CAIRO_PATTERN_TYPE_LINEAR,
    CAIRO_PATTERN_TYPE_RADIAL,
    CAIRO_PATTERN_TYPE_MESH,
    CAIRO_PATTERN_TYPE_RASTER_SOURCE
} cairo_pattern_type_t;
*/
