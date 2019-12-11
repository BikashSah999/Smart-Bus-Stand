import os
import flask


def render_template(template_driectory, template_file, **context):
    template_path = os.path.join(template_driectory, template_file)
    source_text_lines = open(template_path).readlines()
    source_text = ''.join(source_text_lines)
    return flask.render_template_string(source_text, **context)
