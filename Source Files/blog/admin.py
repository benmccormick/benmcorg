from blog.models import Post,RelatedLink, Category,Tag
from django.contrib import admin

class LinkInline(admin.StackedInline):
    model = RelatedLink
    extra = 2

class CategoryAdmin(admin.ModelAdmin) :
    fieldsets = [
        ('Category',  {'fields': ['name']}),
    ]

class TagAdmin(admin.ModelAdmin) :
    fieldsets = [
        ('Tag', {'fields': ['name']}),
    ]

class PostAdmin(admin.ModelAdmin):
    fieldsets = [
        ('Post',               {'fields': ['title','content','slug','category','tags']}),
        ('Date information', {'fields': ['pub_date']}),
    ]
    inlines = [LinkInline]


admin.site.register(Post, PostAdmin)
admin.site.register(Category, CategoryAdmin)
admin.site.register(Tag,TagAdmin)
